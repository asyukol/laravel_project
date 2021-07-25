<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
       'title', 'author', 'date','views', 'contents',
    ];
    public $timestamps = false;
}
