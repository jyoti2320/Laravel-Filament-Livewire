<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Faqs extends Model
{
    //
    use HasFactory;
    protected $fillable = ['question','answer','status'];
}
