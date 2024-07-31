<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    // Se a tabela não for 'users', especifique o nome da tabela
    protected $table = 'tblusers'; // Altere para o nome da tabela real
}
