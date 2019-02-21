<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallpost extends Model
{
    protected $fillable = ['title', 'body', 'user_id'];
}
