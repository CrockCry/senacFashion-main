<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoDesfile extends Model
{
    use HasFactory;

    protected $table = 'tblfotos_desfile';

    protected $fillable = [
        'id_desfile',
        'foto_desfile',
    ];

    public function desfile()
    {
        return $this->belongsTo(Desfile::class, 'id_desfile');
    }
}
