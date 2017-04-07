<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jugadores extends Model
{
    protected $table = 'jugadores';

    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = ['id','name'];

    public function product ()
    {
         // belongsto --- pertenece a
         return $this->belongsto(Juegan::class);

    }
}
