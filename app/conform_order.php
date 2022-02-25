<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class conform_order extends Model
{
    protected $table= "conform_orders";
    public $primarykey ="id";
    public $timestamp = true;

    public function admins()
	{
		return $this->belongsTo('App\admin');
	}
}
