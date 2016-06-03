<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/rolldice/{guess}', 'HomeController@rollDice');

Route::get('/home', 'HomeController@showHome');

Route::get('/wizard', 'HomeController@showWizard');

Route::get('/basicCalculator', 'HomeController@showCalculator');

Route::get('/catchabutterfly', 'HomeController@showButterfly'); 

Route::get('/randomQuestGen', 'HomeController@showRandomQuest');

Route::get('/simpleSimon', 'HomeController@showSimpleSimon');

Route::get('/weatherMap', 'HomeController@showWeatherMap');

Route::get('/blog', 'HomeController@showBlog');

Route::resource('posts', 'PostsController');

Route::get('/posts', 'HomeController@showIndex');

Route::get('orm-test', function ()
{
    // test code here
    $posts = Post::all();
    return $posts;
});



