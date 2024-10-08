<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>Dashboard</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('task.create')}}">Create a Task</a>
        </div>
        <br>
        <table border="1">
            <caption>Tasks Table</caption>
            <tr>
                <th>User ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Due Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($tasks as $task)
                <tr>
                    <td>{{$task->user_id}}</td>
                    <td>{{$task->title}}</td>
                    <td>{{$task->description}}</td>
                    <td>{{$task->status}}</td>
                    <td>{{$product->due_date}}</td>
                    <td>
                        <a href="{{route('task.edit', ['task' => $task])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('task.destroy', ['task' => $task])}}">
                            @csrf 
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <br><br>
        <div>
            <a href="{{route('task.createcategory')}}">Create a Category</a>
        </div>
        <br>
        <table border="1">
            <caption>Category Table</caption>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($tasks as $task)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <a href="{{route('task.editcategory', ['category' => $category])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('task.destroycategory', ['category' => $category])}}">
                            @csrf 
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>