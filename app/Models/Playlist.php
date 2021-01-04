<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
<<<<<<< HEAD

=======
>>>>>>> 73e25b7c285e93ef620d0cd0175ce33972d88503
    protected $fillable = [
        'music_name',
        'singer',
        'category_id',
        'country_id',
        'image',
<<<<<<< HEAD
        'audio'
=======
>>>>>>> 73e25b7c285e93ef620d0cd0175ce33972d88503
    ];

    public function category()
    {
<<<<<<< HEAD
        return $this->belongsTo('App\Models\Category');
=======
        return $this->hasOne(Category::class);
>>>>>>> 73e25b7c285e93ef620d0cd0175ce33972d88503
    }

    public function country()
    {
<<<<<<< HEAD
        return $this->belongsTo('App\Models\Country');
    }



=======
        return $this->hasOne(Country::class);
    }
>>>>>>> 73e25b7c285e93ef620d0cd0175ce33972d88503
}
