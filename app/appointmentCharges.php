<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointmentCharges extends Model
{
    protected $table="appointmentCharges";
    public $primaryKey="id";
    public $timestamps=true;
}
