<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Website' }}</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #28457f, #0f2a60);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: #333;
        }
        .container {
            width: 90%;
            max-width: 1000px;
            margin: auto;
            padding: 20px;
        }
        .card {
            background: #b7c9e6;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-top: 20px;
        }

        footer {
            background: #414b61;
            color: #8fa0ba;
            text-align: center;
            padding: 15px;
            margin-top: auto;
        }
    </style>
</head>

<body>
    <x-navbar />

    <div class="container">
        <div class="card">
            {{ $slot }}
        </div>
    </div>

    <footer>
        <p>© {{ date('Y') }} MyWebsite. All rights reserved.</p>
    </footer>

</body>
</html>