<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodes extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $casts = [
        'characters' => 'array'
    ];
}
