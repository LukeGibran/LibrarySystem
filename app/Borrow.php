<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    public function books() {
        return $this->hasMany('App/Books');
    }

    public function borrower(){
        return $this->hasMany('App/Borrower');
    }
}
