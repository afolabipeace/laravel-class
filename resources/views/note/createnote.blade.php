@extends('note.index')

@section('content')
    <div class="container">
        @if (Auth::user())
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="shadow p-4">
                    <h5 class="text-center text-muted">ADD NOTE</h5>
                    <a href="/note">
                        <button class="btn btn-dark mb-3">View Note</button>
                    </a>
                   <form action="/note" method="POST">
                    @csrf
                    {{-- @method("PUTx") --}}
                    <input type="text" placeholder="Note Title" name="note_title" class="form-control mb-3">

                    <textarea name="note" placeholder="Your note here..." class="form-control mb-3 " id="" cols="30" rows="10"></textarea>

                    <button type="submit" class="btn btn-outline-primary">Add note</button>
                   </form>
                </div>
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