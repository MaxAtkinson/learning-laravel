<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Card;

class NotesController extends Controller
{
    public function store(Request $request, Card $card) {
        $this->validate($request, ['body' => 'required|min:10']);
        $card->addNote(new Note($request->all()), 1);
        return back();
    }

    public function edit(Note $note) {
        return view('notes.edit')->withNote($note);
    }

    public function update(Request $request, Note $note) {
        $note->update($request->all());
        return back();
    }
}
