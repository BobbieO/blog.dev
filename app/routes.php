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

Route::get('/home', function()
{
    return View::make('home');
});

Route::get('/wizard', function()
{
    return View::make('wizard');
});

Route::get('/basicCalculator', function()
{
    return View::make('basicCalculator');
});

Route::get('/catchabutterfly', function()
{
    return View::make('catchabutterfly');
});

Route::get('/randomQuestGen', function()
{
    return View::make('randomQuestGen');
});

Route::get('/simpleSimon', function()
{
    return View::make('simpleSimon');
});

Route::get('/weatherMap', function()
{
    return View::make('weatherMap');
});





