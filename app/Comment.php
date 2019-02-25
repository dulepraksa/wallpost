<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected fillable=['body','attachment'];

    public function user()
    { 
    	$this->belongsTo('App\User');
    }

    public function wallpost()
    {
    	$this->belongsTo('App\Wallpost');
    }

}
