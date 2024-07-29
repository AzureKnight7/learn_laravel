<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use illuminate\support\Arr;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'author',
        'slug',
        'body',
    ];
    
}
