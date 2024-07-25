<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoDesfile extends Model
{
    use HasFactory;

    // Especifique os campos que podem ser preenchidos em massa
    protected $fillable = [
        'id_desfile',
        'foto_desfile',
        'status'
    ];

    // Caso o nome da tabela seja diferente do plural da model, especifique
    protected $table = 'tblfotos_desfile';
}

