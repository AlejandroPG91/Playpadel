<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Juegan extends Model
{
    protected $table = 'juegan';

    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = ['partidos_id', 'jugadores_id','hora','dias'];

    public function jugadores ()
    {
         return $this->hasmany(Jugadores::class);
    }
    public function partidos ()
    {
         return $this->hasmany(Partidos::class);
    }
}
