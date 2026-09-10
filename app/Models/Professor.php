<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Professor extends Model
{
    protected $fillable = ['nome'];

    public function alunos(): HasMany
    {
        return $this->hasMany(Aluno::class);
    }
}
