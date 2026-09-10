<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $alunoId = $this->route('aluno');

        return [
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:alunos,email,' . $alunoId],
            'curso' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve conter texto válido.',
            'nome.max' => 'O campo nome deve ter no máximo 255 caracteres.',

            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'Informe um email válido.',
            'email.max' => 'O campo email deve ter no máximo 255 caracteres.',
            'email.unique' => 'Este email já está cadastrado.',

            'curso.required' => 'O campo curso é obrigatório.',
            'curso.string' => 'O campo curso deve conter texto válido.',
            'curso.max' => 'O campo curso deve ter no máximo 255 caracteres.',
        ];
    }
}
