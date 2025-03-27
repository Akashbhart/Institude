<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userinformation extends Model
{
    protected $table = "userinformations";
    protected $fillable = ['name', 'email', 'contact', 'gender','pin_code','address'];
}
