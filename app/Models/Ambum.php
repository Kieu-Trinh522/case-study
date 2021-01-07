<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambum extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ambum',
        'singer_ambum',
        'image',
    ];

    public function playlist()
    {
        return $this->hasMany('App\Models\Playlist');
    }
}
