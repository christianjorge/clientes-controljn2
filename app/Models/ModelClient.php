<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelClient extends Model
{
    use HasFactory;
    protected $table = 'client';
    //Campos que vou permitir cadastro:
    protected $fillable = ['nome','telefone', 'cpf', 'placa'];
}
