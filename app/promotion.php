<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{
    protected $table= "promotions";
    public $primarykey ="id";
    public $timestamp = true;
}
