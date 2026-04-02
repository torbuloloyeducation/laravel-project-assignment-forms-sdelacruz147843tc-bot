<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ✅ WELCOME PAGE
Route::get('/', function () {
    return view('welcome');
});


// ✅ ABOUT PAGE (FORM LOGIC)
Route::match(['get', 'post'], '/about', function (Request $request) {

    $emails = session('emails', []);

    if ($request->isMethod('post') && $request->has('email')) {

        $request->validate([
            'email' => 'required|email'
        ]);

        if (count($emails) >= 5) {
            return back()->with('error', 'Maximum of 5 emails only!');
        }

        if (in_array($request->email, $emails)) {
            return back()->with('error', 'Email already exists!');
        }

        $emails[] = $request->email;

        session(['emails' => $emails]);

        return back()->with('success', 'Email added successfully!');
    }

    return view('about', compact('emails'));
});


// ✅ CONTACT PAGE (FIXED)
Route::get('/contact', function () {
    $emails = session('emails', []); // 🔥 IMPORTANT
    return view('contact', compact('emails'));
});


// ✅ DELETE EMAIL
Route::post('/delete-email', function (Request $request) {

    $emails = session('emails', []);

    if (isset($emails[$request->index])) {
        unset($emails[$request->index]);
        $emails = array_values($emails);
        session(['emails' => $emails]);
    }

    return back()->with('success', 'Email deleted!');
});