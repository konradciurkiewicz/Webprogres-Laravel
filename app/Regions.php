<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    public function pages()
    {
        return $this->hasMany('page');
    }
}
