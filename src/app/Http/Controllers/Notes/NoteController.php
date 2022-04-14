<?php

namespace App\Http\Controllers\Notes;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $note = Note::get()->first();

        if (!$note)
        {
            $note = new Note();
            $note->description = null;
        }

        return view('notes.index', compact('note'));

    }

    public function noteUpdate(Request $request)
    {
        $note = Note::get()->first();

        if (!$note) {

            $note = new Note();

        }
        $note->description = $request->text_space;
        $note->save();

        return redirect()->action([NoteController::class, 'index']);
    }
}
