<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quae ipsum autem ipsam suscipit consequatur nobis officiis eligendi ut inventore. Enim vel assumenda nulla atque? Minima accusantium, consequuntur corporis ex facilis consequatur adipisci repellat ut est quas, totam dolores inventore cumque! Sunt rerum quae impedit commodi vero. Placeat quos eveniet ipsa, similique voluptatum vero, consequatur illo porro harum, aperiam itaque ad doloremque assumenda! Pariatur, eveniet! Nulla quidem, quaerat delectus velit quisquam eius nostrum cumque impedit incidunt excepturi? Architecto, non ut."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui sequi vero libero incidunt voluptatibus cumque numquam accusantium earum eos obcaecati eligendi ipsa dolor dolore minus delectus, veritatis perspiciatis nulla ipsum iure. Voluptatem vel excepturi tempore quibusdam saepe voluptatum molestias quas suscipit. Incidunt nam quisquam corporis aut amet, quae totam molestiae laboriosam labore tempora libero molestias architecto voluptate culpa obcaecati facere quia laborum, voluptatibus rem minus. Nam ratione aliquam provident? Minus totam voluptas veniam architecto, necessitatibus error distinctio, corporis modi expedita quis aliquam! Est culpa eveniet, doloribus ratione consequuntur quasi recusandae omnis earum mollitia in, beatae, commodi quo hic nulla assumenda."
        ]
    ];

    public static function all()
    {
        // pake panah kalo sebagai properti biasa
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
