<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'slug',
        'cover',
        'eyelet',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
