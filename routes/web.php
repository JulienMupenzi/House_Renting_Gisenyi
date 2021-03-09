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

Route::get('/', 'HomeController@index')->name('welcome');
Route::redirect('/home', '/')->name('home');

Route::resource('/sugestion', 'SugestionController')->only('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Auth::routes();

Route::resource('/sendsuggestion', 'SendSuggestionController');
Route::get('/property/{property}', 'PropertyController@show')->middleware('auth')->name('property');
Route::get('/order/{property}', 'OrderController@order')->middleware('auth')->name('order');

Route::get('/properties/{quarter}', 'PropertyController@showByQuarter')->name('quarter');

Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');

Route::group(['middleware' => ['auth', 'special'], 'prefix' => 'admin'], function () {
    Route::get('/', ['uses' => 'AdminController@index'])->name('admin.index');
    Route::resource('quarters', 'QuarterController')->middleware(['admin']);
    Route::resource('properties', 'PropertyController');
    Route::resource('orders', 'OrderController')->middleware(['agent']);
    Route::resource('users', 'UserController')->middleware(['admin']);
    Route::resource('clients', 'UserController')->middleware(['agent']);
});

?>