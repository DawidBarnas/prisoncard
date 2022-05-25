<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miejsceusera extends Model
{
    use HasFactory;

    protected $table = 'miejsceuseras';
    protected $fillable = [
        'id_straznika', 'Miejsce',
    ];

    protected $casts =
    [
        'id_straznika' => 'int',
        'Miejsce' => 'int',

    ];
}
