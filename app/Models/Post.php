<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    public function user()
    {
        //sebuah post punya 1 writer
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        //cek tag pada tiap postingan, 1 tag bisa ke banyak post dan sebaliknya
        return $this->belongsToMany(Tag::class);
    }
}
