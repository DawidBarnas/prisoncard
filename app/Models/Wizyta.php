<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wizyta extends Model
{
    use HasFactory;

    protected $table = 'Wizytas';
    protected $fillable = [
        'id', 'id_wieznia', 'data_wizyty', 'czas_trwania',
    ];
    protected $casts =
    [
        'data_wizyty' => 'date',
        'czas_trwania' => 'int',
    ];

}