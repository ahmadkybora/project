<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable=['workPriceLevel1','workPriceLevel2','workPriceLevel3','defaultPriceWallet1','defaultPriceWallet2','defaultPriceWallet3'];
}
