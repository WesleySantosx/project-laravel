<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Aluno::create([
                'nome' => 'Aluno ' . $i,
                'email' => 'aluno' . $i . '@gmail.com',
                'curso' => 'Engenharia de Software',
            ]);
        }
    }
}
