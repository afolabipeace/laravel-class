@extends('todo.index')
@section('content')

    <div class="container">
        @if (Auth::user())
        <div class="row">
            <div class="col-7 mx-auto">
                <a href="/todo/create">
                <button class="btn btn-info">Add Todo</button>
            </a>
                @foreach ($todos as $todo)
                <div class="row shadow mb-4 p-3">
                    <div class="col-3">{{$todo->todo_name}}</div>
                    <div class="col-3">{{$todo->todo_desc}}</div>
                    <div class="col-3">
                        <a href="/todo/{{$todo->todo_id}}/edit">
                            <button class="btn btn-success">Edit</button>
                        </a>
                    </div>
                    <div class="col-3">
                       <a href="/todo/{{$todo->todo_id}}">
                             <button class="btn btn-danger">Delete</button>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
            <div class="row">
                <div class="col-12 mx-auto col-md-6 shadow p-5">
                    <h1>You are not logged in !!!!!!!!!!</h1>
                    <a href="/login">Login</a>
                </div>
            </div>
        @endif
        
    </div>
@endsection