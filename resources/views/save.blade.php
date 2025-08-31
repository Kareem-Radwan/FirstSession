<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Enter User Data</h1>
    <form action="{{ route("user.save") }}" method="POST">
        @method("POST")
        @csrf
        <input type="text" name="username" placeholder="Enter Username">
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" value="Log In">
    </form>
</body>
</html>