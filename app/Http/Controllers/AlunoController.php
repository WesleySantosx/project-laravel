<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlunoRequest;
use App\Models\Aluno;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AlunoController extends Controller
{
    public function index(): View
    {
        $alunos = Aluno::latest()->get();

        return view('alunos.index', compact('alunos'));
    }

    public function create(): View
    {
        return view('alunos.create');
    }

    public function store(StoreAlunoRequest $request): RedirectResponse
    {
        Aluno::create($request->validated());

        return redirect()->route('alunos.index')->with('success', 'Aluno cadastrado com sucesso!');
    }

    public function show(string $id): View
    {
        $aluno = Aluno::findOrFail($id);

        return view('alunos.show', compact('aluno'));
    }

    public function edit(string $id): View
    {
        $aluno = Aluno::findOrFail($id);

        return view('alunos.edit', compact('aluno'));
    }

    public function update(StoreAlunoRequest $request, string $id): RedirectResponse
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->validated());

        return redirect()->route('alunos.index')->with('success', 'Aluno atualizado com sucesso!');
    }

    public function destroy(string $id): RedirectResponse
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();

        return redirect()->route('alunos.index')->with('success', 'Aluno removido com sucesso!');
    }
}
