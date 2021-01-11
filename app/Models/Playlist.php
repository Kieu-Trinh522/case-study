<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'music_name',
        'singer',
        'category_id',
        'country_id',
        'ambum_id',
        'image',
        'audio',

    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function ambum()
    {
        return $this->belongsTo('App\Models\Ambum');
    }

    public function singer()
    {
        return $this->belongsTo(Singer::class,'singer_id','id');
    }
}
