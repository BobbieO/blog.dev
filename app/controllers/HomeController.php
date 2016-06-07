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
    	return View::make('resume');
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

	public function showRandomQuest()
	{
    	return View::make('randomQuestGen');
	}

	public function showSimpleSimon()
	{
    	return View::make('simpleSimon');
	}

	public function showWeatherMap()
	{
    	return View::make('weatherMap');
	}

	public function showBlog()
	{
		return View::make('blog');
	}

	public function showMore()
	{
		return View::make('moreSites');
	}

	//GET
	public function loginForm() 
	{
		//show form with 2 fields for submitting/login
		return View::make('login');
	}

	//POST
	public function doLogin() 
	{
		//grab all input

		//validate input fields

		//attempt login
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
    		return Redirect::intended('/');
		} else {
    		return Redirect::action('PostsController@login');
		}
	}

	//GET
	public function doLogout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}




	// for adding blog index/main to dropdown
	// public function showIndex()
	// {
	// 	$posts = Post::all();
	// 	return View::make('posts.index')->with('posts', $posts);
	// }
}


