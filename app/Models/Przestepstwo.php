<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Przestepstwo extends Model
{
    use HasFactory;
    protected $table = 'Przestepstwos';
    protected $fillable = [
        'id', 'id_wieznia', 'data_popelnienia', 'data_rozprawy', 'Klasyfikacja', 'Status',
    ];

    protected $casts =
    [
        'data_popelnienia' => 'date',
        'data_rozprawy' => 'date',
        'Klasyfikacja' => 'string',
        'Status' => 'string',
    ];

}