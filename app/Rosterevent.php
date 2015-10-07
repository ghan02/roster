<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Rosterevent extends Model
{
    protected $table = 'events';
    protected $fillable = ['title','notes','isapproved','startdate','enddate','user_id','color','textColor'];

    public function attachments()
    {
    	 return $this->belongsToMany('App\Attachment');
    }
}
