<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    //Pagina principal
    public function index(){
        $alunos = Aluno::paginate(10);
        return view('alunos.index', compact('alunos'));
    }

    //Criação de um aluno
    public function create(){
        return view('alunos.create');
    }
    public function store(Request $request){
        Aluno::create($request->all());
        return redirect()->route("alunos.index");
    }

    //Edição do aluno
    public function edit(Aluno $aluno){
        return view("alunos.edit", compact("aluno"));
    }
    public function update(Request $request, Aluno $aluno){
        $aluno->update($request->all());
        return redirect()->route("alunos.index");
    }

    //Apagar o aluno
    public function destroy(Aluno $aluno){
        $aluno->delete();
        return redirect()->route('alunos.index');
    }
}
