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
        'titulo', 'subtitulo', 'data_evento', 'sobre_evento', 'banner_path', 'status'
    ];

    public function fotos()
    {
        return $this->hasMany(FotoDesfile::class, 'id_desfile');
    }
}
