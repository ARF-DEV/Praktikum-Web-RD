{{-- {{dd($todo)}}; --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo - List</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <script defer src="{{ asset('js/show_all.js') }}"></script> --}}
</head>
<body>
    <div id="todo-list">
        <div id="header">
            <h2>Todo List</h2>
            <button id='create-btn'><a href="{{url('todoList','create')}}">Create New Item</a></button>
        </div>
        @foreach ($todo as $list)
            <div class="list">
                <h3>{{$list["title"]}}</h3>
                <p>{{$list["desc"]}}</p>
                <button id="edit-btn"><a href="{{ route('todoList.edit', $list->id) }}">Edit!</a></button>
                <form action="{{ url('todoList', $list->id) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Done</button>
                </form>
            </div>    
        @endforeach
    </div>


</body>
</html>