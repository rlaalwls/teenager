<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Front@main');

Route::get('/introduction/greeting', 'Front@introduction');
Route::get('/introduction/history', 'Front@introduction');
Route::get('/introduction/organization', 'Front@introduction');
Route::get('/introduction/member', 'Front@introduction');

Route::get('/activity/gallery', 'Front@activity');
Route::get('/activity/counseling', 'Front@board_list');

Route::get('/noti/news', 'Front@board_list');
Route::get('/noti/sponsor', 'Front@noti');

Route::get('/noti/news/board_view', 'Front@board_view');
Route::get('/activity/counseling/board_view', 'Front@board_view');

?>