<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'articleId', 'author', 'date','text',
    ];
    public $timestamps = false;
}
