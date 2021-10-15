<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_level extends Model
{
    use HasFactory;
     protected $fillable = [
     'course_level_name'
    ];
}
