<?php
use Illuminate\Support\Facades\Input;
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
/*Route::post('/search', function(){
    $q=Input::get('q');
    dd($q);
});
*/
Route::resource('showproduct','PostsController');
Route::resource('projects','ProjectsController');
Route::post('/projects/{project}/tasks', 'ProjectTaskController@store');
Route::patch('/tasks/{task}','ProjectTaskController@update');

Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');

Auth::routes();
Route::get('/projects/{project}/details', 'ProjectsController@details');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'layoutController@about')->name('about');
Route::get('/contact', 'layoutController@contact')->name('contact');