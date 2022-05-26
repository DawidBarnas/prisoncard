<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Prisoner as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Prisoner extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'prisoners';
    protected $fillable = [
        'id', 'Imie', 'Nazwisko', 'Miasto','Ulica', 'Waga', 'Wzrost', 'Telefon', 'id_celi', 'mozliwosc_wizyt', 'mozliwosc_przepustek', 'Status_celi',
    ];

    protected $casts =
    [
        'Imie' => 'string',
        'Nazwisko' => 'string',
        'Miasto' => 'string',
        'Ulica' => 'string',
        'Waga' => 'int',
        'Wzrost' => 'int',
        'Telefon' => 'int',
        'mozliwosc_wizyt' => 'boolean',
        'mozliwosc_przepustek' => 'boolean',
        'Status_celi' => 'string',
    ];
}