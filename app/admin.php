<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class admin extends Model
{
    protected $table= "admins";
    public $primarykey ="id";
    public $timestamp = true;


		public function appointments()
		{
			return $this->hasMany('App\appointment');
		}
		public function conform_orders()
		{
			return $this->hasMany('App\conform_order');
		}


		public function carts()
		{
			return $this->hasMany('App\cart');
		}

		public function orders()
		{
			return $this->hasMany('App\order');
		}
}
