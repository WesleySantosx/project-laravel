<?php

namespace App\Policies;

use App\Models\Aluno;
use App\Models\User;

class AlunoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'professor'], true);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Aluno $aluno): bool
    {
        return in_array($user->role, ['admin', 'professor'], true);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Aluno $aluno): bool
    {
        if ($user->role === 'admin') {
            return true;
        }

        return $user->role === 'professor' && $user->id === $aluno->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Aluno $aluno): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Aluno $aluno): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Aluno $aluno): bool
    {
        return $user->role === 'admin';
    }
}
