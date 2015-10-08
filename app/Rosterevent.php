<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Rosterevent extends Model
{
    protected $table = 'events';
    protected $fillable = ['title','notes','isapproved','startdate','enddate','user_id','color','textColor','isalldayevent','isforwarded'];

    public function attachments()
    {
    	 return $this->belongsToMany('App\Attachment');
    }

    public function links()
    {
    	 return $this->belongsToMany(Link::class);
    }
}
