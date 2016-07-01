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

Route::get('/', 'HomeController@showHome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/home', 'HomeController@showHome');

Route::get('/wizard', 'HomeController@showWizard');

Route::get('/basicCalculator', 'HomeController@showCalculator');

Route::get('/catchabutterfly', 'HomeController@showButterfly'); 

Route::get('/randomQuestGen', 'HomeController@showRandomQuest');

Route::get('/simpleSimon', 'HomeController@showSimpleSimon');

Route::get('/weatherMap', 'HomeController@showWeatherMap');

Route::get('/blog', 'HomeController@showBlog');

Route::get('/peddler', 'HomeController@showPeddler');

Route::get('/flit', 'HomeController@showFlit');

Route::get('/moreProjects', 'HomeController@showMore');

Route::resource('posts', 'PostsController');

Route::get('/login', 'HomeController@loginForm');

Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@doLogout');

Route::get('orm-test', function ()
{
    // test code here
});



