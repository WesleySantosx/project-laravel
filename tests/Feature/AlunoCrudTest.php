<?php

namespace Tests\Feature;

use App\Models\Aluno;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Gate;
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

    public function test_student_store_validates_custom_messages(): void
    {
        $response = $this->from('/alunos/create')->post('/alunos', [
            'nome' => '',
            'email' => '',
            'curso' => '',
        ]);

        $response->assertRedirect('/alunos/create');
        $response->assertSessionHasErrors(['nome', 'email', 'curso']);
        $response->assertSessionHasErrors([
            'nome' => 'O campo nome é obrigatório.',
            'email' => 'O campo email é obrigatório.',
            'curso' => 'O campo curso é obrigatório.',
        ]);
    }

    public function test_admin_user_can_access_admin_route(): void
    {
        $user = User::factory()->create(['role' => 'admin']);

        $response = $this->actingAs($user)->get('/admin/alunos');

        $response->assertOk();
    }

    public function test_professor_user_cannot_access_admin_route(): void
    {
        $user = User::factory()->create(['role' => 'professor']);

        $response = $this->actingAs($user)->get('/admin/alunos');

        $response->assertForbidden();
    }

    public function test_admin_can_delete_aluno_and_professor_cannot(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $professor = User::factory()->create(['role' => 'professor']);
        $aluno = Aluno::factory()->create();

        $this->assertTrue(Gate::forUser($admin)->allows('delete', $aluno));
        $this->assertFalse(Gate::forUser($professor)->allows('delete', $aluno));
    }
}
