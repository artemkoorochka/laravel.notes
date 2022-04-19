<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/notes', [App\Http\Controllers\NoteController::class, "index"])->name("index");

Route::get('/notes/create', [App\Http\Controllers\NoteController::class, "create"])->name("create");
Route::post('/notes/create', [App\Http\Controllers\NoteController::class, "save"]);

Route::get("/notes/{note}", [App\Http\Controllers\NoteController::class, "show"])->name("show");
Route::get("/notes/{note}/edit", [App\Http\Controllers\NoteController::class, "edit"])->name("edit");
Route::patch("/notes/{note}", [App\Http\Controllers\NoteController::class, "update"])->name("update");
Route::delete("/notes/{note}", [App\Http\Controllers\NoteController::class, "destroy"])->name("destroy");
