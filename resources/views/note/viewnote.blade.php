@extends('note.index')
@section('content')
    @foreach ($note as $note)
    <div class="container">
        <div class="row">
            <div class="col-5 mx-auto">
                <h1 class="text-center fw-bold">Note Details</h1>
                <div class="shadow bg-primary p-3" style="border-radius: 20px;">
                    {{-- <div>{{$note->note_id}}</div> --}}
                    <h2 class="fw-bold text-center text-light">{{$note->note_title}}</h2>
                    <i class="fw-bold">{{$note->note_text}}</i> <br><br>
                    <h5 class="text-center">Date-Time: {{$note->created_at}}</h5>
                    <div class="col-3">
                        <a href="/note">
                            <button class="btn btn-danger">VIEW ALL</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                       
    @endforeach
@endsection