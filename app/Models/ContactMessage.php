<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = [
        'nombre',
        'telefono',
        'mensaje',
        'locale',
        'ip',
        'user_agent',
    ];

    protected $casts = [
        'locale' => 'string',
    ];
}
