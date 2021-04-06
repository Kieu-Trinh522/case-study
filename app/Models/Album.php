<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_album',
        'singer_album',
        'image',
    ];

    public function playlist()
    {
        return $this->hasMany('App\Models\Playlist');
    }
}
