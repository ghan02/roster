<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = 'links';

    protected $fillable = ['title','url'];

    public function events()
    {
    	return $this->belongsTo(Rosterevent::class);
    }
}
