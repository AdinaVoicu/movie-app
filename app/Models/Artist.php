<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model
{
    use HasFactory;
    use SoftDeletes;


    public $orderable = [
        'id',
        'name',
        'title',
        'created_at',
    ];

    public $filterable = [
        'id',
        'name',
        'title',
    ];

    protected $hidden = [];

    protected $fillable = [
        'name',
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_artist', 'artist_id', 'movie_id');
    }
}
