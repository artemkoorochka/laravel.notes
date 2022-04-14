<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

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
}
