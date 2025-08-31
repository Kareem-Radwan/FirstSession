<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Search For Name:</h1>
    <form action="{{ route("search.result") }}" method="GET">
        <input type="text" placeholder="Enter Search" name="name">
        <input type="submit" value="Search">
    </form>
</body>
</html>