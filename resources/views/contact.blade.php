<x-layout>
    <h1>Etypekita</h1>
    <a href="/">balay</a>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    @if($errors->any())
        <ul style="color:red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="/about">
        @csrf
        <input type="text" name="email" placeholder="Enter email">
        <button type="submit">Add Email</button>
    </form>

    <h3>Saved Emails:</h3>

    <ul>
    @foreach($emails ?? [] as $index => $email)
        <li>
            {{ $email }}

            <form method="POST" action="/delete-email" style="display:inline;">
                @csrf
                <input type="hidden" name="index" value="{{ $index }}">
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
    </ul>

</x-layout>