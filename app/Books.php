<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function borrow(){
        return  $this->hasOne('App\Borrower');
    }
}
