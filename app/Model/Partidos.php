<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Partidos extends Model
{
    protected $table = 'partidos';

    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = ['id','name'];

    public function product ()
    {
         // belongsto --- pertenece a
         return $this->belongsto(Juegan::class);

    }
}
