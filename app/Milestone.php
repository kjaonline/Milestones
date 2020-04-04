<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    //Define relationship of Milestones and Notes
    public function notes() {
        return $this->hasMany('App\Notes');
    }
}
