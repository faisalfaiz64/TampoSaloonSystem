<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class add_product extends Model
{
    protected $table= "products";
    public $primarykey ="id";
    public $timestamp = true;
}