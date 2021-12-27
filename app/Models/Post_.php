<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adi Saputra",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis enim saepe dolores consequatur a itaque, asperiores cum praesentium illo omnis suscipit mollitia qui officiis ipsa eos eum minus vel illum?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ayu Setianingsih",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis aliquid architecto repellat similique rem quibusdam nesciunt sed tempora, libero minus? Accusantium tenetur eligendi magni repellat amet dignissimos ab eum, placeat aliquid cum a vero voluptate perspiciatis praesentium ea eaque mollitia enim. Ratione ex expedita ipsa cumque aperiam ducimus sapiente necessitatibus doloribus optio quaerat inventore, numquam voluptates perferendis iusto illum voluptas labore facere veritatis alias molestiae excepturi sint. Alias atque error libero illum eaque velit repellat qui minus odit deserunt. Atque tempore natus, totam reiciendis minima impedit eaque error, nostrum aut exercitationem officia tempora nulla esse, consectetur ducimus iste excepturi sed!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
       $posts = static::all();
       return $posts->firstWhere('slug', $slug);
    }
    
}
