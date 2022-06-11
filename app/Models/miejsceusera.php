<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miejsceusera extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'miejsceuseras';
    protected $fillable = [
        'id_straznika', 'Miejsce', 'name', 'surname',
    ];

    protected $casts =
    [
        'id_straznika' => 'int',
        'Miejsce' => 'string',
        'name' => 'string',
        'surname' => 'string',

    ];
}
