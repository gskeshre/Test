<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRecord extends Model
{
    protected $table = 'rollno';
    protected $fillable =['rollno','name'];
}
