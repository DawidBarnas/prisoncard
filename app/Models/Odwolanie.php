<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odwolanie extends Model
{
    use HasFactory;

    protected $table = 'Odwolanie';
    protected $fillable = [
        'id', 'id_procesu','data_zgloszenia', 'data_rozprawy', 'Status',
    ];
}