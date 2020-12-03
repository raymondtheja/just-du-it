<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function shoe(){
        return $this->hasMany(Shoe::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }
}
