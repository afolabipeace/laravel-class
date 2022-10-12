@extends('note.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="shadow p-4">
                    <h5 class="text-center text-muted">EDIT NOTE</h5>
                   <form action="/note/{{$note->note_id}}" method="POST">
                    @csrf
                    @method("PUT")
                    <input type="text" placeholder="Note Title" name="note_title" class="form-control mb-3" value="{{$note->note_title}}">
                    <input type="text" placeholder="Your note here..." class="form-control mb-3" value="{{$note->note_text}}" name="note_text">
                    {{-- <textarea name="note_text" placeholder="Your note here..." class="form-control mb-3" id="" cols="30" rows="10"  value="{{$note->note_text}}"></textarea> --}}

                    <button type="submit" class="btn btn-outline-primary">Update note</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection