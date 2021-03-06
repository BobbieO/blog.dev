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

	public function showPeddler()
	{
		return View::make('peddler');
	}

	public function showFlit()
	{
		return View::make('flit');
	}

	public function showMore()
	{
		return View::make('moreProjects');
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
		$username = Input::get('username');
		$password = Input::get('password');

		//validate input fields


		//attempt login
		if (Auth::attempt(array('username' => $username, 'password' => $password))) {

			Session::flash('successMessage', 'You logged in!');
    		return Redirect::intended('/posts');
    		
		} else {
    		return Redirect::action('HomeController@loginForm');
		}
	}

	//GET
	public function doLogout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}




	
}


