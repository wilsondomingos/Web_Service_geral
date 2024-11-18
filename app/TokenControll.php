<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TokenControll extends Model
{
    protected $fillable = [
        'nome_instituicao', 'email_instituicao', 'nome_utilizador','tokem','tempo_vida','data_expiracao','estado'
    ];
}
