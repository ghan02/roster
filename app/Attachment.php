<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $table = 'attachments';
    protected $fillable = ['filename','location'];
    public $timestamps = false;

    public function events()
    {
    	return $this->belongsTo(Rosterevent::class);
    }
}
