<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
  public static function all()
  {
    return [
      [
        'id' => 1,
        'slug' => 'post-1',
        'title' => 'Post 1',
        'author' => 'Aldiansyah',
        'body' => 'Illo qui qui consectetur vero libero temporibus quam reprehenderit praesentium. Officiis magnam dolorem debitis ut et dolorum ut hic explicabo fuga expedita. Vel adipisci iste quae placeat sit molestiae corporis placeat laudantium. Velit aliquam quia corrupti quisquam dicta et et. Et facilis autem aut consectetur et quia eligendi blanditiis numquam iusto.'
      ],
      [
        'id' => 2,
        'slug' => 'post-2',
        'title' => 'Post 2',
        'author' => 'Aldiansyah',
        'body' => 'Doloribus sit autem cupiditate et eos aperiam nobis ullam laboriosam quo ipsum aut dignissimos rem natus. Possimus et nisi doloremque dolor molestias earum. Fugit quam aliquam dolor. Molestiae esse minima tenetur totam sit at molestias et.'
      ]
    ];
  }

  public static function find($slug)
  {
    return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
  }
}
