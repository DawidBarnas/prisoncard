<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Kara as Authenticatable;
class Kara extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'karas';
    protected $fillable = [
        'id', 
        'id_wieznia',
        'Typ',
        'data_rozpoczecia',
        'planowana_data_zakonczenia',
        'dodatkowe_kary',
    ];

    protected $casts =
    [
        'id_wieznia' => 'int',
        'Typ' => 'string',
        'data_rozpoczecia' => 'date',
        'planowana_data_zakonczenia' => 'date',
        'dodatkowe_kary' => 'string',

    ];

}