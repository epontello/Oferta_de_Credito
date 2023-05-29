<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Cpf extends Authenticatable
{
    protected $fillable = [
        'cpf',
        'nome_inst',
        'nome_modal',
        'codigo_modal',
        'qtdmin_parc',
        'qtdmax_parc',
        'vlrmin',
        'vlrmax',
        'jurmes',
    ];
}
