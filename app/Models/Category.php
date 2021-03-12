<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'category_name',
    ];

    public function playlist()
    {
        return $this->hasMany(Playlist::class, 'category_id');
    }
}
