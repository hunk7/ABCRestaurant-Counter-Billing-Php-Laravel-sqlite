<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addorder extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
