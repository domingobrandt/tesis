<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Position extends Model
{
    protected $fillable = ['name','bio','avatar','slug','position_id','employee_id'];


    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function employees(){ 
        return $this->belongsToMany('App\Employee','employee_position','position_id','employee_id');
    }  
}
