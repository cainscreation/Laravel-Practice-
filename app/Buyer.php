<?php

namespace App;
use App\User;
 use App\Transection;

class Buyer extends User
{
    public function transections(){
        return $this->hasMany(Transection::class);
    }
}
