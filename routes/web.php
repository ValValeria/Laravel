<?php

use Illuminate\Http\Response;

Route::get('/public/{folder}/{filename}','Data@show');

Route::post('/signupPage','Signup@signup');

Route::get('/loginUserPage','Login@loginUserPage');

Route::post('/addpostPage','AddPost@addpost')->middleware('auth');

Route::get('/postPage/{postTitle}','AddPost@getPost');

Route::post('/deletepost/{postTitle}','AddPost@deletePost');

Route::get('/searchPage','AddPost@searchPosts');

Route::get('/postsPage','AddPost@getPosts');

Route::get('/csfr','Signup@csfr');

Route::post('/addpost','AddPost@addPost');

Route::get('/getUserPosts','AddPost@getUserPosts')->middleware('auth');

Route::get('/scripts/{folder}/{filename}', 'Data@show');

Route::fallback(function () {
   return response(Storage::disk('public')->get('index.html'))->header('Content-Type','text/html');
});


?>