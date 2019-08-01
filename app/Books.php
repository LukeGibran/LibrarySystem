<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function borrow(){
        return  $this->hasMany('App\Borrow');
    }

    public function borrower(){
        return $this->belongsTo('App\Borrower');
    }
}
