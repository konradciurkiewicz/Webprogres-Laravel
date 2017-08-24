<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\page;

class Views extends Model
{
    public function viewPage()
    {
        return $this->belongsTo('App\page');
    }
    public function checkVisit()
    {
        return true;
    }
}
