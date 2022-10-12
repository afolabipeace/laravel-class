@extends('todo.index')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="shadow p-3">
                    <form action="/todo/create" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h3 class="text-center display-6 text-muted">ADD TODO</h3>
                        <input type="text" placeholder="Todo Title" class="form-control mb-3" name="todo_name">
                        <input type="text" placeholder="Todo Description" class="form-control mb-3" name="todo_desc">
                        <input type="file" name="image" class="form-control mb-2">
                        <button type="submit" class="btn btn-outline-info w-100">Add Todo</button>
                    </form>
                    <a href="/todo">
                        <button class="btn btn-info mt-3 w-100">View todo</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
@endsection