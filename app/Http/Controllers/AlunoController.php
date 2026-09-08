<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return "Listando todos os alunos";
    }
    public function create()
    {
        return "Formulário de cadastro de aluno";
    }
    public function store(Request $request)
    {
        return "Salvando novo aluno";
    }
    public function show($id)
    {
        return "Exibindo detalhes do aluno com ID: {$id}";
    }
    public function edit($id)
    {
        return "Formulário de edição do aluno com ID: {$id}";
    }
    public function update(Request $request, $id)
    {
        return "Atualizando aluno com ID: {$id}";
    }
    public function destroy($id)
    {
        return "Excluindo aluno com ID: {$id}";
    }
    
}
