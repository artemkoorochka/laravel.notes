<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\File;

class FileController extends Controller
{
    public function index()
    {
        $files = Files::all();
        return view("files.index", ["files" => $files]);
    }

    public function create(Request $request)
    {
        $file = $request->allFiles();
        $file = current($file);

        /**
         * @var \Illuminate\Http\UploadedFile $file
         */

        $fileData = [
            "name" => time() . "_" . $file->getClientOriginalName(),
            "type" => $file->getMimeType(),
            "size" => $file->getSize(),
            "path" => "public/"
        ];

        $file->storeAs($fileData["path"], $fileData["name"]);
        $fileData["path"] = "storage/" . $fileData["name"];

        Files::create($fileData);

        return redirect('/files');
    }
}
