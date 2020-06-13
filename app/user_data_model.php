<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_data_model extends Model
{
    protected  $table = "user_data";

    protected $fillable = ["name","uname","password"];
}
