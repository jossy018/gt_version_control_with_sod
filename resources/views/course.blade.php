<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/get-courses" method="post">
        @csrf
        <label for="">course name</label>
        <input type="text" name="name">
        <label for="">password</label>
        <input type="text" name="pass">
        <input type="submit" value="save" name="save">
    </form>
</body>
</html>