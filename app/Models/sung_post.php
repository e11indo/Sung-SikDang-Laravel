<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sung_post extends Model
{
    use HasFactory;
    protected $fillable= [
        'title', 'description','name','password','created_at'
    ];
    protected $table= 'sung_posts';
}
