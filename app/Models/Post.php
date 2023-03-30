<?php

namespace App\Models;


class Post
{
    static private
        $blog_posts = [
            [
                'title' => 'Post Pertama',
                'slug' => 'post-pertama',
                'author' => 'Hendro S',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, error optio. Eos numquam similique doloribus, sed consequatur esse. Ullam corporis placeat, nobis adipisci eaque nostrum distinctio reiciendis vel! Quasi dicta pariatur quam sit qui, vel eius quod ut, ratione inventore quibusdam ab aspernatur illum beatae accusamus eos dolores soluta ex autem sed eveniet incidunt. Dolor nulla dolorum at ratione! Deserunt nemo quibusdam quia ratione eligendi nesciunt provident nisi nostrum, repudiandae labore suscipit quasi soluta reprehenderit, sunt nobis repellat saepe temporibus animi sit asperiores. Nihil, alias culpa fugiat illo optio iure voluptatum quae incidunt esse inventore doloremque consectetur sapiente assumenda accusamus?'
            ],
            [
                'title' => 'Post Kedua',
                'slug' => 'post-kedua',
                'author' => 'Indra S',
                'body' =>   'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum corporis accusantium inventore ea minima harum neque esse incidunt beatae voluptates, consequatur minus libero, in fugit sed illo dolorum! Accusantium, minima possimus, dignissimos, amet alias obcaecati omnis soluta hic tempore error voluptates! Neque quidem animi tempora, nemo cumque nobis vel odio praesentium magnam sit repudiandae rem sequi, sed dolorum maxime, autem eligendi consectetur ipsa distinctio alias impedit est ab. Ducimus assumenda sequi nihil nam, suscipit dignissimos aliquam. Doloremque reiciendis magni, fugit quia debitis maxime, eum dolorem obcaecati vero iure accusamus provident pariatur minima nulla quis ipsam possimus quaerat ducimus quas voluptas eos eveniet sequi hic aspernatur! Unde dolores id maiores reiciendis veniam. Et, eaque! Porro a reprehenderit quod nesciunt delectus facere et saepe accusantium modi, impedit molestias veniam aspernatur nobis pariatur dolorum explicabo beatae sed, quae aliquam quisquam dolorem ipsum ipsa? Quos odio a tempora quibusdam ad placeat reiciendis dolorum optio!'
            ]
        ];

    public static function all()
    {
        return  collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
