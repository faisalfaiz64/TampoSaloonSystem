<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notfDetailOwner extends Model
{
    protected $table= "notf_detail_owners";
    public $primarykey ="id";
    public $timestamp = true;
}
