<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->user_id;
        $notes = Note::where('user_id', $user_id)->get();
        return view ("note.note",[
            "note" => $notes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("note.createnote");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->input("note")
        // $note = new Note;
        // $note->note_title = $request->note_title;
        // $note->note_title = $request->note;
        // $note->save();

        $addNote = Note::create([
        "note_title" => $request->note_title,
        'note_text' => $request->note,
        "user_id" =>auth()->user()->user_id,
    ]);
        // return $addNote;
        return redirect ("/note");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $notes = Note::all()->where("note_id", $id);
        return view ("note.viewnote",[
            "note" => $notes
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $note = Note::find($id);
        return view ("note.editnote", ["note" => $note]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $updateNote = Note::where('note_id', $id)->update([
            'note_title' => $request->note_title,
            'note_text' => $request->note_text,
        ]);
        return redirect('/note');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delete = Note::find($id);
        $delete->delete();
        return redirect('/note');
    }
}