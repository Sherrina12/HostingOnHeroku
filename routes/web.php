<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;


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
//   return view('welcome');
//});

Route::get('/', function () {
    return view('index');
});

Route::get('login', [AdminController::class,'login']);
Route::post('login-admin', [AdminController::class,'loginAdmin'])->name('login-admin');
Route::get('logout',[AdminController::class,'logout'] );

Route::get('about', 'IndexController@about');
Route::get('qualification', 'IndexController@qualification');
Route::get('education', 'IndexController@edu');
Route::get('activities', 'IndexController@act');
Route::get('interest', 'IndexController@int');

Route::get('adminabout', 'AdminController@about');
Route::get('viewabout','AdminController@viewabout');
Route::get('addabout', 'AdminController@createabout');
Route::post('addabout', 'AdminController@storeabout');
Route::get('editabout/{id}', 'AdminController@editabout');
Route::put('updateabout/{id}', 'AdminController@updateabout');
Route::delete('deleteabout/{id}', 'AdminController@destroyabout');

Route::get('adminact', 'AdminController@act');
Route::get('addact', 'AdminController@createact');
Route::post('addact', 'AdminController@storeact');
Route::get('editact/{id}', 'AdminController@editact');
Route::put('updateact/{id}', 'AdminController@updateact');
Route::delete('deleteact/{id}', 'AdminController@destroyact');
Route::get('viewact/{id}', 'AdminController@viewact');

Route::get('adminedu', 'AdminController@edu');
Route::get('editedu/{id}', 'AdminController@showedu');
Route::POST('editedu/', 'AdminController@editedu');
Route::get('addedu', 'AdminController@createedu');
Route::post('addedu', 'AdminController@storeedu');
Route::delete('deleteedu/{id}', 'AdminController@destroyedu');

Route::get('adminqual', 'AdminController@qual');
Route::get('addqual', 'AdminController@createqual');
Route::post('addqual', 'AdminController@storequal');
Route::get('editqual/{id}', 'AdminController@editqual');
Route::put('updatequal/{id}', 'AdminController@updatequal');
Route::delete('deletequal/{id}', 'AdminController@destroyqual');

Route::get('adminint', 'AdminController@int');
Route::get('addint', 'AdminController@createint');
Route::post('addint', 'AdminController@storeint');
Route::get('editint/{id}', 'AdminController@editint');
Route::put('updateint/{id}', 'AdminController@updateint');
Route::delete('deleteint/{id}', 'AdminController@destroyint');
Route::get('viewint/{id}', 'AdminController@viewint');









