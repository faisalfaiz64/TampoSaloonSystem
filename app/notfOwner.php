<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notfOwner extends Model
{
    protected $table= "notf_owners";
    public $primarykey ="id";
    public $timestamp = true;
}
