<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//  http://localhost/
Route::get('/', function () {

    //get all Data From DB

    //$posts = \App\Post::get();
    $few_posts = \App\Post::take(3)->get();

    $data = [
        'myposts' => $few_posts,
        'title'   => 'Home',
    ];

    return view('pages.home', $data);
});

Route::get('/contact', function () {

    return view('pages.contact');
});

Route::get('/blog', function () {
    $posts = \App\Post::get();
    //$first_post = $posts->pull(0);

    $data = [
        'myposts'    => $posts,
        //'first_post' => $first_post,
        'title'      => 'All Blogss',
    ];

    return view('pages.blog', $data);
});

Route::get('/post', function () {
$posts = \App\Post::orderBy('updated_at','desc')->limit(2)->get();
    // $posts = \App\Post::get();
    $first_post = $posts->pull(0);

    $data = [
        'myposts'    => $posts,
        'first_post' => $first_post,
        'title'      => 'All Blogss',
    ];
    return view('pages.post', $data);
});

// /blog/31
Route::get('/blog/{id}', function ($id) {

    $one_post = \App\Post::find($id);

    if ($one_post == null) {
        abort(404);
    }

    $data = [
        //'my_one_post' => $one_post,
        'title'       => 'All Blogss',
    ];

    return view('pages.blog--single', $data);
});

