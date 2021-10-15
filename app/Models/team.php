<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;
    protected $fillable = [
     'team_image','team_name','team_designation','team_facebook','team_twetter','team__insta',
    ];
}
