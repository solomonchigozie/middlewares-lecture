<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('post.store') }}" method="post">  
        @csrf
        <div>
            <input type="hidden" name="user_id" value="2"> <br>
            <input type="text" name="title" placeholder="Title"><br>
            <textarea name="description" placeholder="Description"></textarea><br>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>