<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miejsceusera extends Model
{
    use HasFactory;

    protected $table = 'Miejsceusera';
    protected $fillable = [
        'id_straznika', 'Miejsce',
    ];
}
