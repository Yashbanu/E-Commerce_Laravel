<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>E-Commerse</title>
</head>
<body>
    <form action="update" method="POST">
        @csrf
       <h1>Update-Id</h1><br>
        <input type="number" name="id"><br><br>
        <button type="submit" >Update</button>
    </form>
</body>
</html>