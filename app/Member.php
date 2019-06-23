<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name','member_id','service_id','batch_id','phone_number','office_name','designation','email','image','remember_token'];
}
