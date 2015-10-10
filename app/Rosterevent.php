<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Rosterevent extends Model
{
    protected $table = 'events';
    protected $fillable = ['title','notes','isapproved','startdate','enddate','user_id','color','textColor','isalldayevent','isforwarded','eventtype_id'];

    protected $casts = [
        'isalldayevent' => 'integer',
        'isforwarded' => 'integer',
        'isapproved' => 'boolean'
    ];

    public function attachments()
    {
    	 return $this->belongsToMany('App\Attachment');
    }

    public function links()
    {
    	 return $this->belongsToMany(Link::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
