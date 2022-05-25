<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miejsce_wieznia extends Model
{
    use HasFactory;
    protected $table = 'miejsce_wieznias';
    protected $fillable = [
        'id_wieznia', 'Miejsce',
    ];

    protected $casts =
    [
        'id_wieznia' => 'int',
        'Miejsce' => 'int',

    ];
}