<?php

use App\Http\Controllers\NoteController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return 'Pagina de inicio';
});

Route::get('/notas', [NoteController::class, 'index'])->name('notes.index');

Route::get('/notas/{id}', [NoteController::class,'show'])->name('notes.view');

Route::get('/notas/crear', [NoteController::class,'create'])->name('notes.create');

Route::post('/notas',[NoteController::class,'store'])->name('notes.store');

Route::get('/notas/{id}/editar', [NoteController::class,'edit'])->name('notes.edit');