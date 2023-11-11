<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
//    public $id;
//    public $mezszam;
//    public $klubid;
//    public $posztid;
//    public $utonev;
//    public $vezeteknev;
//    public $szulido;
//    public $magyar;
//    public $kulfoldi;
//    public $ertek;

    use HasFactory;
    protected $table = 'labdarugo';
    protected $fillable = [
        'mezszam', 'klubid', 'posztid',
        'utonev', 'vezeteknev', 'szulido',
        'magyar', 'kulfoldi', 'ertek'
        ];
}
