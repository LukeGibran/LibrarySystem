<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    public function books() {
        return $this->belongsTo('App\Books');
    }

    public function borrower(){
        return $this->belongsTo('App\Borrower');

    }
}
