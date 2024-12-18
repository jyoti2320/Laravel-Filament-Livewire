<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TeamMember extends Model
{
    use HasFactory;
    protected $fillable = ['image','name','position','fb_url','insta_url','linkedin_url','status'];
    //
}
