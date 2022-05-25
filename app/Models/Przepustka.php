<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Przepustka extends Model
{
    use HasFactory;
    protected $table = 'Przepustkas';
    protected $fillable = [
        'id', 'id_wieznia','data_przepustki', 'czas_trwania',
    ];

    protected $casts =
    [
        'data_przepustki' => 'date',
        'czas_trwania' => 'int',
    ];

}