<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // Buscar todos os alunos com seus endereços e salas
       $alunos = Aluno::with('endereco', 'sala')->get();
        
       return view('alunos.index', ['alunos' => $alunos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer',
            'curso' => 'required|string|max:255',
            'email' => 'required|email|unique:alunos,email',
            'matricula' => 'required|string|max:255',
        ]);

        // Criar o aluno no banco de dados
        aluno::create([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'curso' => $request->curso,
            'email' => $request->email,
            'matricula' => $request->matricula,
        ]);

        // Redirecionar para a lista de alunos
        return redirect()->route('alunos.create')->with('success', 'Aluno cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(aluno $aluno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(aluno $aluno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatealunoRequest $request, aluno $aluno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(aluno $aluno)
    {
        //
    }
}
