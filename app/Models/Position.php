<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
//    public $id;
//    public $nev;

    use HasFactory;
    protected $table = 'poszt';
    protected $fillable = [
        'nev'
    ];
}
