<?php

use Illuminate\Http\Request;

Route::match(['get','post'],'/public/{folder}/{filename}','Data@show');
Route::post('/signup','AuthenticateUser@signup');
Route::post('/signup','AuthenticateUser@login');
Route::post('/addpost','AddPost@addpost')->middleware('auth');
Route::post('/post/{postTitle}','AddPost@getPost');

/**
 * urls:
 * POST /signup (email,password,name)
 * POST /login (email,password)
 */
?>