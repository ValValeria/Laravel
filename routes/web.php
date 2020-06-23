<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/
/*
Route::get('/','WebSocketController@index')->name('main');
Route::resource('register','Auth\RegisterController');
Route::get('logout','Auth\RegisterController@logout');

Route::get('public/photoes/{name}',function($name){
    if(!Auth::check()) return abort(403);
    return Storage::get('public/photoes/'.$name);
});
Route::get('/public/photoes_for_card/{name}',function($name){
    return Storage::get('public/photoes_for_card/'.$name);
});
Route::get('login','Auth\LoginController@index');
Route::post('login','Auth\LoginController@store');
Route::get('/posts','Controller@show_posts');
Route::middleware(['auth'])->group(function () {
    Route::get('/myprofile','Card@index')->name('prof');
    Route::post('/myprofile','Card@post');
    Route::post('/addproject','Card@add');
    Route::get('/otherusers','Controller@show_f')  ;
    Route::post('/otherusers','Controller@postdata')  ;
    Route::get('/delete/{name}','Controller@delete')->name('delete');
    Route::get('/delete_posts/{name}','Controller@delete_posts')->name('delete');
    Route::get('/show_post/{id}','Controller@show_spec_post');
});
*/
//Route::view('/{main?}','welcome');

Route::resource('/signup','Auth\SignUp');


Route::get('/logout','Auth\Signup@logout');


Route::group(['prefix' => 'auth'],function(){

      Route::get('/{id}','Auth\Control@index')->where('id', '[0-9]+');//admin area
      Route::post('/{id}','Auth\Control@store')->where('id', '[0-9]+');//admin area
      Route::get('addpost','Auth\AddPost@index');

      Route::post('addpost','Auth\AddPost@store');

});

Route::resource('/login','Auth\Login')->only([
    'index', 'store'
]);

Route::get('posts','PostController@index');
Route::get('posts/{post}','PostController@show');

Route::get('/public/{folder}/{filename}',function ($folder,$filename ){
    $file=$folder.'/'.$filename;
    if(Storage::disk('public')->exists($file)){
        $array=[
            'css'=>'text/css'
        ];
        $ex=$array[pathinfo($filename,PATHINFO_EXTENSION)];
        if($ex){
            return response( Storage::disk('public')->get($file),200)
            ->header('Content-Type',$ex);
        }
        return response('Forbidden',403);
        
    }
    return response(null,302);
});
Route::fallback('Controller@findFile');