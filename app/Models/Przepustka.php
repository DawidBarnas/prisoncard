<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Przepustka extends Model
{
    use HasFactory;
    protected $table = 'Przepustka';
    protected $fillable = [
        'id', 'id_wieznia','data_przepustki', 'czas_trwania',
    ];
}