<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function rollDice($guess)
	{
	    $random = mt_rand(1, 6);

	    if($random == $guess) {
	        $message = "You won!";
	    } else {
	        $message = "You lost, try again.";
	    }

	    $data = array('number' => $random, 'guess' => $guess, 'message' => $message);

	    return View::make('roll-dice')->with($data);    
	}

	public function showResume()
	{
    	return "This is my resume.";
	}

	public function showHome()
	{
    	return View::make('home');
	}

	public function showCalculator()
	{
    	return View::make('basicCalculator');
	}

	public function showWizard()
	{
    	return View::make('wizard');
	}

	public function showButterfly()
	{
    	return View::make('catchabutterfly');
	}

	public function randomQuest()
	{
    	return View::make('randomQuestGen');
	}

	public function simpleSimon()
	{
    	return View::make('simpleSimon');
	}

	public function weatherMap()
	{
    	return View::make('weatherMap');
	}
}


