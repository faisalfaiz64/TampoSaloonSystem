<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
     protected $table= "Feedbacks";
    public $primarykey ="id";
    public $timestamp = true;
}
