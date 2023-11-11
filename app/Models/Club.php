<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
//    public $id;
//    public $csapatnev;

    use HasFactory;
    protected $table = 'klub';
    protected $fillable = [
        'csapatnev'
    ];
}
