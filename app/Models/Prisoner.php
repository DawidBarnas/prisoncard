<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prisoner extends Model
{
    use HasFactory;

    protected $table = 'Prisoner';
    protected $fillable = [
        'id', 'Imie', 'Nazwisko', 'Miasto','Ulica', 'Waga', 'Wzrost', 'Telefon', 'id_celi', 'Mozliwosc_wizyt', 'Mozliwosc_przepustek', 'Status_celi',
    ];
}