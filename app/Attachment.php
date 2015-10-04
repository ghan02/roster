<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $table = 'attachments';
    protected $fillable = ['filename','location'];

    public function events()
    {
    	return $this->belongsTo(Rosterevent::class);
    }
}
