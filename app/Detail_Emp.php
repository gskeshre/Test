<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_Emp extends Model
{
    protected $table = 'emp';
    protected $fillable = ['rollno', 'name'];
}
