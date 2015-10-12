<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Team extends Model
{
    protected $table ="teams";
    protected $fillable = ['title','notes'];

    public function users()
    {
    	return $this->belongsToMany(User::class);
    }
}
