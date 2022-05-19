<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proces extends Model
{
    use HasFactory;

    protected $table = 'Proces';
    protected $fillable = [
        'id', 'id_kary', 'Status', 'Data_procesu', 'Grzywna',
    ];
}