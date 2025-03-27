<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class addstudent extends Model
{
    protected $table = "addstudents";
    protected $fillable = ['name', 'email_id', 'contact','course'];
}
