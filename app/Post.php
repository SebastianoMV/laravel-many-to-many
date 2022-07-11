<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
    
    public static function newSlug($string){
        $slug = Str::slug($string, '-');
        $slug_copy = $slug;

        $flag = Post::where('slug', $slug)->first();
        $c=1;

        while($flag){
            $slug = $slug_copy . '-' .$c;       
            $c++;
            $flag = Post::where('slug', $slug)->first();
        }

        return $slug;

    }

    protected $fillable = ['title', 'slug', 'content'];
}
