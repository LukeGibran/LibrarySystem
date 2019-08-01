<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    public function borrow(){
        return $this->hasMany('App\Borrow');
    }

    public function books(){
        return $this->hasMany('App\Books');
    }
}
