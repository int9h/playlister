<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlists extends Model
{
    protected $guarded = [];

    public function videos()
    {
        return $this->hasMany(Videos::class, 'playlist_id', 'id');
    }
}
