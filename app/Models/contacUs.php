<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contacUs extends Model
{
    protected $table = "contacuss";
    protected $fillable = ['name', 'email', 'mobile', 'message'];
}
