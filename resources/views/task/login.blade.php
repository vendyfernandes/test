<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>
        Log in
    </h1>
    <form method="post" action="{{route('task.authenticate')}}">
        @csrf
        @method('post')
        <div>
            <label>Email:</label>
            <input type="name" placeholder="Enter Email" />
        </div>
        <br>
        <div>
            <label>Password: </label>
            <input type="password" placeholder="Enter Password" />
        </div>    
        <br>
        <div>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</body>
</html>