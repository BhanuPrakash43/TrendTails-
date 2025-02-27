<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title' , 'slug', 'excerpt', 'body', 'user_id', 'category_id','post_status','post_type'];

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
