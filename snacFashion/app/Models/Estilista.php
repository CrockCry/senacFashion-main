<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estilista extends Model
{
    protected $table = 'tblestilistas';

    protected $fillable = [
        'nome',
        'imagem_path',
    ];
}
