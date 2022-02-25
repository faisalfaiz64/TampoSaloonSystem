<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table= "carts";
    public $primarykey ="id";
    public $timestamp = true;

    public function admins()
	{
		return $this->belongsTo('App\admin');
	}
}
