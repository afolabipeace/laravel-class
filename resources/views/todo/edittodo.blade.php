@extends('todo.index')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="shadow p-3">
                    <form action="/todo/{{$todo->todo_id}}/edit" method="POST">
                        @csrf
                        <h3 class="text-center display-6 text-muted">EDIT TODO</h3>
                        <input type="text" placeholder="Todo Title" class="form-control mb-3" name="todo_name" value="{{$todo->todo_name}}">
                        <input type="text" placeholder="Todo Description" class="form-control mb-3" name="todo_desc" value="{{$todo->todo_desc}}">
                        <button type="submit" class="btn btn-outline-info w-100">Edit Todo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection