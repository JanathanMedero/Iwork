<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['employee_id', 'job', 'salary', 'time_in_the_company'];
}
