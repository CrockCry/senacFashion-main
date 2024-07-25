<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desfile extends Model
{
    use HasFactory;

    protected $table = 'tbldesfile';

    protected $fillable = [
        'banner_desfile', 'titulo_desfile', 'subtitulo_desfile', 'sobre_desfile', 'data_desfile', 'status'
    ];

    public function fotos()
    {
        return $this->hasMany(FotoDesfile::class, 'id_desfile');
    }
}
