<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $orderable = [
        'id',
        'status',
        'name',
        'rating',
        'created_at',
    ];

    public $filterable = [
        'id',
        'name',
        'rating',
        'artists.title'
    ];

    protected $hidden = [];

    protected $fillable = [
        'status',
        'name',
        'rating',
        'description',
        'image',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public function artists()
    {
        return $this->belongsToMany(Artist::class, 'movie_artist', 'movie_id', 'artist_id');
    }
}
