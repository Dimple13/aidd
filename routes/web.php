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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/symptoms', 'PagesController@symp_diag');
Route::get('/treatment', 'PagesController@treatment');
Route::get('/more', 'PagesController@moreonadhd');
Route::get('/videos', 'PagesController@videos');
Route::get('/exercises', 'PagesController@exercises');
Route::get('/exercises1', 'PagesController@exercises1');
Route::get('/tictactoe', 'GamesController@Tictactoe');
Route::get('/numnext', 'GamesController@NumNext');
Route::get('/memnext', 'GamesController@MemNext');
Route::get('/flappy', 'GamesController@Flappy');
Route::get('/shape', 'GamesController@Shape');
Route::get('/memory', 'GamesController@Memory');
Route::get('/stroop', 'GamesController@Stroop');
Route::get('/connectdots', 'GamesController@connectdots');
Route::get('/maze', 'GamesController@maze');
// Route::get('/spot', 'GamesController@spot');
Route::get('/age','AgeController@index');
Route::get('/age_result','AgeController@store');
Route::get('/spot', 'GamesController@spot');
Route::get('/numbers','GamesController@numbers');
Route::get('/MissingLetters','GamesController@MissingLetters');
Route::get('/flappy','GamesController@flappy');
Route::get('/spotrevert','GamesController@spotrevert');
Route::get('/strooprevert','GamesController@strooprevert');
Route::get('/graph','ChartController@graph');
Route::get('/progress1','PagesController@progress1');
/*extra pages*/
Route::get('/about','PagesController@about');
Route::get('/faq','PagesController@faq');
Route::get('/blog','PagesController@blog');
Route::get('/logop','PagesController@Log');
Route::get('/snakescore','SnakeController@model');
// Route::get('/exercises',function(){
//     if(Auth::guest()){
//         return View::make('auth.login');
//     }
//     return View::make('pages.exercises');
// });
// Route::get('/demo', function () {
//         return view('inc.exe_navbar');
//     });
Auth::routes();
Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginform')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('/home', 'HomeController@index')->name('home');
// Routes for getting data
Route::post('/stroop_result','StroopController@store');

Route::get('/mem_result','MemoryController@store');
// Route::get('/dem','StroopController@store');
Route::get('/page',function(){
    return view('pages.exe_page');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
