<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback_Data extends Model
{
    protected $table= "FeedbackDatas";
    public $primarykey ="id";
    public $timestamp = true;
}
