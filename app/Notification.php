<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function notificationRec()
    {
        return $this->belongsTo('App\User');
    }
}
