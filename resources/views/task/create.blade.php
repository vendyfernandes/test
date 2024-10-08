<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Task</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('task.store2')}}" >
        @csrf
        @method('post')
        <div>
            <label>User_Id: </label>
            <input type="text" name="userid" placeholder="User ID" />
        </div>
        <br>
        <div>
            <label>Title: </label>
            <input type="text" name="title" placeholder="Title" />
        </div>
        <br>
        <div>
            <label>Description: </label>
            <input type="text" name="description" placeholder="Description" />
        </div>
        <br>
        <div>
            <label>Status: </label>
            <input type="text" name="status" placeholder="Status" />
        </div>
        <br>
        <div>
            <label>Due Date: </label>
            <input type="date" name="duedate" placeholder="Due Date" />
        </div>
        <br>
        <div>
            <input type="submit" value="Save new task" />
        </div>
    </form>
</body>
</html>