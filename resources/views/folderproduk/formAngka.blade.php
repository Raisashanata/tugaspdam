<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ route('form-action') }}">
    @csrf
    <input type="number" name="angka">
    <button type="submit">Cek</button>
</body>
</html>
