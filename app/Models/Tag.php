<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
     return 'slug';   
    }

    public function posts()
    {
        //cek tag pada tiap postingan, 1 tag bisa ke banyak post dan sebaliknya
        return $this->belongsToMany(Post::class);
    }
}
