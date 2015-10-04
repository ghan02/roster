<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Rosterevent extends Model
{
    protected $table = 'events';
    protected $fillable = ['title','notes','isapproved','startdate','enddate','user_id'];

    public function attachments()
    {
    	return $this->hasMany(Attachment::class,'id');
    }
}
