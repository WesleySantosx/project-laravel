<?php

namespace Tests\Feature;

use App\Models\Aluno;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AlunoCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_displays_students(): void
    {
        Aluno::factory()->create([
            'nome' => 'Maria',
            'email' => 'maria@example.com',
            'curso' => 'ADS',
        ]);

        $response = $this->get('/alunos');

        $response->assertOk();
        $response->assertSee('Maria');
    }

    public function test_create_form_is_available(): void
    {
        $response = $this->get('/alunos/create');

        $response->assertOk();
        $response->assertSee('Cadastro de Aluno');
    }
}
