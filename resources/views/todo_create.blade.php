<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create List</h1>
    <a href="{{url('todoList')}}">Back</a>
    <form action="{{url('todoList')}}" method="POST" id="create-list">
    @csrf
        <label for="title">Title:</label><br>
        <input type="text" name="title" placeholder="title..."><br>
        <label for="desc">Description:</label><br>
        <input type="text" name="desc" placeholder="desc..."><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>