<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kara extends Model
{
    use HasFactory;

    protected $table = 'Kara';
    protected $fillable = [
        'id', 'id_wieznia','Typ','data_rozpoczecia','planowana_data_zakonczenia','dodatkowe_kary',
    ];
}