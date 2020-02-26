<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = ['usuario', 'cantidad', 'prioridad','direccion','precio'];
}