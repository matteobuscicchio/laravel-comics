<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'cover',
        'availability',
        'price',
        'trim_size',
        'page_content',
        'rating',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
