<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function pages()
    {
        return $this->hasMany('page');
    }
}
