<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class NoteController {
    public function index() {
        $notes = [
            'Primera nota',
            'Segunda nota',
            'Tercera nota',
            'Cuarta nota',
            'Quinta nota',
            'Sexta nota',
            '<script>alert("Codigo malo")</script>'
        ];
        return view('notes.index')->with('notes', $notes);
    }

    public function show(int $id) {
        return 'Detalle de la nota: '.$id;
    }

    public function create() {
        return view('notes.create');
    }

    public function store() {
        dd(FacadesRequest::all());
    }

    public function edit(int $id) {
        $note = 1;
        return view('notes.edit')->with('note',$note);

    }
}
