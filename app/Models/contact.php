<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $hidden = [
       'first_name',
       'last_name',
       'email',
       'city',
       'country',
       'job_title'
    ];
}
