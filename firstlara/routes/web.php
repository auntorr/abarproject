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

Route::get('/', [
 'uses' => 'AmieController@index',
 'as' => '/'
]
);
Route::get('/detail',[
  'uses' => 'AmieController@about',
  'as' =>'about-amie'
]);
Route::get('/eee',[
  'uses' => 'AmieController@e',
  'as' =>'eee'
]);
Route::get('/civil',[
  'uses' => 'AmieController@c',
  'as' =>'civil'
]);
Route::get('/mechanical',[
  'uses' => 'AmieController@m',
  'as' =>'mechanical'
]);
Route::get('/chemical',[
  'uses' => 'AmieController@ch',
  'as' =>'chemical'
]);
Route::get('/question',[
   'uses' => 'AmieController@prosno',
   'as' => 'question'
]);
Route::get('/solution',[
   'uses' => 'AmieController@solution',
   'as' => 'solution'
]);
Route::get('/classnote',[
   'uses' => 'AmieController@classnote',
   'as' => 'classnote'
]);
Route::get('/videotut',[
   'uses' => 'AmieController@videotut',
   'as' => 'videotut'
]);
Route::get('/career',[
  'uses' => 'AmieController@career',
  'as' =>'career'
]);
Route::get('/science',[
  'uses' => 'AmieController@science',
  'as' =>'science'
]);
Route::get('/alumni',[
  'uses' => 'AmieController@alumni',
  'as' =>'alumni'
]);
Route::get('/acsu',[
  'uses' => 'AmieController@acsu',
  'as' =>'acsu'
]);
Route::get('/cques',[
  'uses' => 'AmieController@cques',
  'as' =>'cques'
]);
Route::get('/eques',[
  'uses' => 'AmieController@eques',
  'as' =>'eques'
]);
Route::get('/mques',[
  'uses' => 'AmieController@mques',
  'as' =>'mques'
]);
Route::get('/chques',[
  'uses' => 'AmieController@chques',
  'as' =>'chques'
]);
Route::get('/chsol',[
  'uses' => 'AmieController@chsol',
  'as' =>'chsol'
]);
Route::get('/csol',[
  'uses' => 'AmieController@csol',
  'as' =>'csol'
]);
Route::get('/msol',[
  'uses' => 'AmieController@msol',
  'as' =>'msol'
]);
Route::get('/esol',[
  'uses' => 'AmieController@esol',
  'as' =>'esol'
]);
Route::get('/ebook',[
  'uses' => 'AmieController@ebook',
  'as' =>'ebook'
]);
Route::get('/mbook',[
  'uses' => 'AmieController@mbook',
  'as' =>'mbook'
]);
Route::get('/cbook',[
  'uses' => 'AmieController@cbook',
  'as' =>'cbook'
]);
Route::get('/chbook',[
  'uses' => 'AmieController@chbook',
  'as' =>'chbook'
]);
Route::get('/cques2',[
  'uses' => 'AmieController@cques2',
  'as' =>'cques2'
]);
Route::get('/eques2',[
  'uses' => 'AmieController@eques2',
  'as' =>'eques2'
]);
Route::get('/mques2',[
  'uses' => 'AmieController@mques2',
  'as' =>'mques2'
]);
Route::get('/chques2',[
  'uses' => 'AmieController@chques2',
  'as' =>'chques2'
]);
Route::get('/chsol2',[
  'uses' => 'AmieController@chsol2',
  'as' =>'chsol2'
]);
Route::get('/csol2',[
  'uses' => 'AmieController@csol2',
  'as' =>'csol2'
]);
Route::get('/msol2',[
  'uses' => 'AmieController@msol2',
  'as' =>'msol2'
]);
Route::get('/esol2',[
  'uses' => 'AmieController@esol2',
  'as' =>'esol2'
]);
Route::get('/notice',[
  'uses' => 'AmieController@notice',
  'as' =>'notice'
]);
Route::get('/result',[
  'uses' => 'AmieController@result',
  'as' =>'result'
]);
Route::get('/routine',[
  'uses' => 'AmieController@routine',
  'as' =>'routine'
]);
Route::get('/dnews',[
  'uses' => 'AmieController@dnews',
  'as' =>'dnews'
]);
Route::get('/anews',[
  'uses' => 'AmieController@anews',
  'as' =>'anews'
]);
Route::get('/acnews',[
  'uses' => 'AmieController@acnews',
  'as' =>'acnews'
]);
Route::get('/break',[
  'uses' => 'AmieController@break',
  'as' =>'break'
]);


