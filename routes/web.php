<?php


use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
   
    return view('welcome');
 
});

//Auth::routes();
//Auth::routes(['verify' => true]);

/*Route::get('profile', function () {
    //
})->middleware('verified'); */


Route::delete('comments/{post_id}', 'HomeController@comd');
Route::post('comments/{post_id}', 'HomeController@ccom');

Route::get('posts/create', 'HomeController@create');
Route::put('posts/create', 'HomeController@insert');

Route::get('/posts/{slug}', 'HomeController@view');
Route::get('/posts/{id}/edit', 'HomeController@edit');


Route::post('posts/{id}/update', 'HomeController@update');
Route::delete('posts/{id}/delete', 'HomeController@delete');


Route::get('image-upload', 'HomeController@imageUpload')->name('image.upload');
Route::post('image-upload', 'HomeController@imageUploadPost')->name('image.upload.post');




Route::get('/profile', function () {

    return view('profile');

})->middleware('verified'); 


Auth::routes();
Route::get('/welcome', 'HomeController@delog')->name('welcome');
Route::get('/home', 'HomeController@index')->name('welcome');