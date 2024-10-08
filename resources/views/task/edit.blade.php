<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Edit Task</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('task.update', ['task' => $task])}}" >
        @csrf
        @method('put')
        <div>
            <label>User Id: </label>
            <input type="text" name="userid" placeholder="User Id" value="{{$task->user_id}}" />
        </div>
        <br>
        <div>
            <label>Title: </label>
            <input type="text" name="title" placeholder="Title" value="{{$task->title}}" />
        </div>
        <br>
        <div>
            <label>Description: </label>
            <input type="text" name="description" placeholder="Description" value="{{$task->description}}" />
        </div>
        <br>
        <div>
            <label>Status: </label>
            <input type="text" name="status" placeholder="Status" value="{{$task->status}}" />
        </div>
        <br>
        <div>
            <label>Due date: </label>
            <input type="date" name="duedate" placeholder="Due date" value="{{$task->due_date}}" />
        </div>
        <br>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>