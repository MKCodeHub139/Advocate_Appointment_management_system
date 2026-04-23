<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    protected $fillable = ['name','email','phone','legal_matter','preferred_date','preferred_time','description'];
}
