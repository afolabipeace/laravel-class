@extends('note.index')
@section('content')
<h5 class="display-6 text-muted text-center">
    Welcome to your note
</h5>
 <div class="container">
    <div class="row">
        @if (Auth::user())
        <div class="col-7 mx-auto p-3">
            <a href="/note/create">
                <button class="btn btn-dark text-light mb-3">ADD NOTE</button>
            </a>
            @foreach ($note as $note)
                <div class="row shadow mb-3 p-3 ">
                    <div class="col-3">
                        {{$note->note_id}}
                    </div>
                    <div class="col-3">
                        <h5 class="text-muted">{{$note->note_title}}</h5>
                    </div>
                    <div class="col-2">
                        <a href="/note/{{$note->note_id}}/edit">
                            <button class="btn btn-primary">EDIT</button>
                        </a>
                    </div>
                    <div class="col-2">
                       <form action="/note/{{$note->note_id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">DELETE</button>
                       </form>
                    </div>
                    <div class="col-2">
                        <a href="/note/{{$note->note_id}}">
                            <button class="btn btn-primary">VIEW</button>
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