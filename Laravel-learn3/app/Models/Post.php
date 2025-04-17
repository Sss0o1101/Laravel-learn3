<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // use HasFactory;

    public function createPost($data)
    {
        $post = new Post();
        $post->image = $data->image;
        $post->caption = $data->caption;
        $post->save();
        return $post;
    }
}
