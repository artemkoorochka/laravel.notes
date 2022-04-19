<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Mockery\Matcher\Not;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        $notes = compact("notes");
        return view("index", $notes);
    }

    public function create()
    {
        return view("create");
    }

    public function save(Request $request)
    {
        $request->validate([
            "text" => "String"
        ]);

        Note::create([
            "text" => $request->post("text")
        ]);

        return redirect()->route("index");
    }

    public function edit(Note $note){
        return view("edit", compact("note"));
    }

    public function update(Note $note, Request $request){
        $note->update([
            "text" => $request->post("text")
        ]);
        return redirect()->route("index");
    }

    public function destroy(Note $note){
        $note->delete();
        return redirect()->route("index");
    }

    public function show(Note $note){
        return view("view", compact("note"));
    }
}
