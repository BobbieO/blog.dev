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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/resume', 'HomeController@showResume');

Route::get('/rolldice/{guess}', 'HomeController@rollDice');

Route::get('/home', 'HomeController@showHome');

Route::get('/wizard', 'HomeController@showWizard');

Route::get('/basicCalculator', 'HomeController@showCalculator');

Route::get('/catchabutterfly', 'HomeController@showButterfly'); 

Route::get('/randomQuestGen', 'HomeController@randomQuest');

Route::get('/simpleSimon', 'HomeController@simpleSimon');

Route::get('/weatherMap', 'HomeController@weatherMap');





