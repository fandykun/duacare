<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];
    protected $table = 'events';

    public function news()
    {
        return $this->hasMany('App\News', 'event_id', 'id');
    }
}
