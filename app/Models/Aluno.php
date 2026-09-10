<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Aluno extends Model
{
    use HasFactory;

    protected $table = 'alunos';

    protected $fillable = ['nome', 'email', 'curso', 'professor_id'];

    public function professor(): BelongsTo
    {
        return $this->belongsTo(Professor::class);
    }
}
