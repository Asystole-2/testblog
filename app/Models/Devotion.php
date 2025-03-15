<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devotion extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'date'];

    protected $dates = ['date'];
}
