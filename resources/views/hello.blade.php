<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/document" method="POST" enctype="multipart/form-data"></form>
    @csrf
    <input type="file" name="document">
    <button type="submit">Enviar</button>
</body>
</html>
