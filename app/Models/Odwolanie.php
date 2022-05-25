<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odwolanie extends Model
{
    use HasFactory;

    protected $table = 'odwolanies';
    protected $fillable = [
        'id', 
        'id_procesu',
        'data_zgloszenia', 
        'data_rozprawy', 
        'Status',
    ];

    protected $casts =
    [
        'id_procesu' => 'int',
        'data_zgloszenia' => 'int', 
        'data_rozprawy' => 'date', 
        'Status' => 'date',
    ];
}