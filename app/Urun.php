<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    protected $fillable = ["urun_adi","urun_aciklama","urun_fiyat"];
}