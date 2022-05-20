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

    protected $table = 'prisoners';
    protected $fillable = [
        'id', 'Imie', 'Nazwisko', 'Miasto','Ulica', 'Waga', 'Wzrost', 'Telefon', 'id_celi', 'Mozliwosc_wizyt', 'Mozliwosc_przepustek', 'Status_celi',
    ];
}