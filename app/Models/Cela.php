<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cela extends Model
{
    use HasFactory;


    protected $table = 'Cela';
    protected $fillable = [
        'id', 'pojemnosc',
    ];
    
    protected $casts =
    [
        'pojemnosc' => 'int',

    ];

}
