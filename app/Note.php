<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    public function milestone(){
        return $this->belongsTo('App\Milestone');
    }
}
