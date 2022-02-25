<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    protected $table= "owners";
    public $primarykey ="id";
    public $timestamp = true;
}
