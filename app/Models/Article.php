<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // menimpa nama table
    protected $table = 'articles';
    // membuat simple insert update dan delete
    protected $guarded = ['id'];
}
