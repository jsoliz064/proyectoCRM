<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDePago extends Model
{
    use HasFactory;
    protected $table="tipo_de_pagos";
    protected $guarded=['id','created_at','updated_at'];
}
