<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Position;

class Employee extends Model
{
    protected $fillable = ['name','bio','avatar','position_id'];

    public function positions(){ 
        return $this->belongsToMany('App\Position','employee_position','employee_id','position_id');
    }  

}
