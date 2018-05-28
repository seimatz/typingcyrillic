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
Route::get('/', function() {
    $crawler = Goutte::request('GET', 'https://duckduckgo.com/html/?q=Laravel');
    $crawler->filter('.result__title .result__a')->each(function ($node) {
      dump($node->text());
    });
    return view('welcome');
});
//
// Route::get('/', function () {
//     return view('top');
// });

//game main screen
Route::get('game/{lang}/{level}', 'GameController@index')
->where('lang', 'russian|bulgarian|ukrainian')
->where('level', '[1-3]');

Route::get('game/test', 'GameController@scraping');

//Keyboard setting
Route::get('contents/setting', function () {
    return view('setting');
});
