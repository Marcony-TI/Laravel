<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Http\Requests\StoreprofessorRequest;
use App\Http\Requests\UpdateprofessorRequest;

class ProfessorController extends Controller
{
    public function index()
    {
        $professores = Professor::with('endereco', 'sala')->get();
        
        return view('professores.index', ['professores' => $professores]);
    }





    public function store(StoreprofessorRequest $request)
    {
        //
    }

    public function show(professor $professor)
    {
        //
    }

    public function edit(professor $professor)
    {
        //
    }

    public function update(UpdateprofessorRequest $request, professor $professor)
    {
        //
    }

    public function destroy(professor $professor)
    {
        //
    }
    
    
};

