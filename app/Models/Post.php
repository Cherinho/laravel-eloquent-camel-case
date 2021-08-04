<?php

namespace App\Models;

use App\Traits\CamelCaseable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, CamelCaseable;

    protected $fillable = [
        'authorName',
        'authorSign',
        'postContent'
    ];
}
