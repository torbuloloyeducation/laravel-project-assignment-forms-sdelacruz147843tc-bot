<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<style>
    *{
        background-color: #18132a;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    br {
        display: none;
    }
    h1 {
        color: pink;
    }
</style>
<body>
<x-navbar />
{{ $slot }}
</body>
</html>
