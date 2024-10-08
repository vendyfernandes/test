<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Register</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('task.store')}}" >
        @csrf
        @method('post')
        <div>
            <label>Name: </label>
            <input type="text" name="name" placeholder="Enter Name" />
        </div>
        <br>
        <div>
            <label>Email: </label>
            <input type="text" name="email" placeholder="Enter Email" />
        </div>
        <br>
        <div>
            <label>Password: </label>
            <input type="password" name="password" placeholder="Enter Password" />
        </div>
        <br>
        <div>
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</body>
</html>