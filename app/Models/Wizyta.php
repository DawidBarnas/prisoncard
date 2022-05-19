<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wizyta extends Model
{
    use HasFactory;

    protected $table = 'Wizyta';
    protected $fillable = [
        'id', 'id_wieznia', 'data_wizyty', 'czas_trwania',
    ];
}