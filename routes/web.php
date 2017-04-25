<?php
use Request;
use App\Reviews;
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
Auth::routes();

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/restaurant', function () {
    $reviews = DB::table('reviews')->where('rid', Request::get('id'))->orderBy('created_at', 'desc')->get();
    return view('pages.restaurant',  ['reviews' => $reviews]);
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/reset', function () {
    return view('pages.passwords.reset');
});



Route::post('/restaurant/submit', 'HomeController@bookTable');
Route::post('/restaurant/submitreview', 'HomeController@submitReview');