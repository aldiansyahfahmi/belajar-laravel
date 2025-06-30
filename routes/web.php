<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    $posts = [
        [
            'title' => 'Post 1',
            'author' => 'Aldiansyah',
            'body' => 'Illo qui qui consectetur vero libero temporibus quam reprehenderit praesentium. Officiis magnam dolorem debitis ut et dolorum ut hic explicabo fuga expedita. Vel adipisci iste quae placeat sit molestiae corporis placeat laudantium. Velit aliquam quia corrupti quisquam dicta et et. Et facilis autem aut consectetur et quia eligendi blanditiis numquam iusto.'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Aldiansyah',
            'body' => 'Doloribus sit autem cupiditate et eos aperiam nobis ullam laboriosam quo ipsum aut dignissimos rem natus. Possimus et nisi doloremque dolor molestias earum. Fugit quam aliquam dolor. Molestiae esse minima tenetur totam sit at molestias et.'
        ]
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
