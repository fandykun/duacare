<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = [];
    protected $table = 'news';

    public function events()
    {
        return $this->belongsTo('App\Event', 'event_id', 'id');
    }
}
