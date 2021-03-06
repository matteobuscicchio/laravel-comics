<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    //
    protected $fillable = [
        'title',
        'slug',
        'cover',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
