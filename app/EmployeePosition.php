<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeePosition extends Model
{
    protected $fillable = ['position_id','employee_id'];

}
