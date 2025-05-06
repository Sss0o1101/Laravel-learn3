<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{

    public function createPost($data)
    {
        $post = new Post();
        $post->image = $data->image;
        $post->caption = $data->caption;
        $post->save();
        return $post;
    }
}
