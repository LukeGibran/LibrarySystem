<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    public function borrow(){
        return $this->hasOne('App\Borrow');
    }
}
