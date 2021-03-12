<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Singer extends Model
{
    use HasFactory;
    protected $fillable = [
        'singer_name',
        'dob',
        'country_id',
        'gender',
        'description',
        'image'

    ];
    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function playlist()
    {
        return $this->hasMany('App\Models\Playlist');
    }
}
