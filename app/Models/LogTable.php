<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogTable extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'typ',
        'user_ac',
        'id_n',
        'name',
        'surname',
        'date',
    ];

    protected $casts =
    [
        'id' => 'int',
        'typ' => 'enum',
        'user_ac' => 'string',
        'id_n' => 'int',
        'name' => 'string',
        'surname' => 'string',
        'date' => 'string',

    ];
}
