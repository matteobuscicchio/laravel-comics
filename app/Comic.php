<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'slug',
        'cover',
        'availability',
        'art_by',
        'written_by',
        'series',
        'price',
        'release_date',
        'volume',
        'trim_size',
        'page_content',
        'rating',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
