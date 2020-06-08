<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'email',
        'description',
        'password',
        'cpf',
        'telephone',
    ];

    public static $rules = [
        'name' => 'required'
    ];

    public static $messages = [
        
    ];
}
