<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable= ["title","post_by","posted_at"]; //34an a7l m4klt el token lma est5dmt el CRD fi el store
    
}
