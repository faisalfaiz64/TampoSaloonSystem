<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    protected $table= "appointments";
    public $primarykey ="id";
    public $timestamp = true;


	public function admins()
	{
		return $this->belongsTo('App\admin');
	}

}