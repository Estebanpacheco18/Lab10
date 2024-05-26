<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', ['notes' => $notes]);
    }
    public function create()
    {
        return view('notes.create');
    }
    public function store(Request $request)
    {
        $note = new Note();
        $note->user_id = $request->user_id;
        $note->course_id = $request->course_id;
        $note->note = $request->note;
        $note->title = $request->title; 
        $note->save();
    
        return redirect()->route('notes.index');
    }
}

