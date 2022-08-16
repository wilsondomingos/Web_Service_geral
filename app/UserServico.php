<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserServico extends Model
{
    protected $fillable = [
        'servico_id','user_id'
    ];
}
