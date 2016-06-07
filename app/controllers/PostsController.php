<?php

class PostsController extends \BaseController {

	public function __construct()
    {
    	//a filter to require authorization except for index and show pages
        $this->beforeFilter('auth', array(
        	'except' => array(
        		'index',
        		'show'
        	)
        ));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//pagination eliminates the need for eager loading bc built-in constraints on data fetching
		$posts = Post::paginate(3);
		return View::make('posts.index')->with('posts', $posts);

		//ex of eager loading:
		// $posts = Post::all(); --->>changes to:
		// $posts = Post::with('user')->get();
		// return View::make('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// create the validator
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails()) {
			// if fails, returns back with errors and input
			Log::info('Post submit failed.');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {

			$post = new Post();
			$post->title = Input::get('title');
			$post->content = Input::get('content');
			// $post->user_id = Auth::id();

			if($post->save()) {
				Session::flash('successMessage', 'Your post was added');
				return Redirect::action('PostsController@show', $post->id);
			} else {
				return Redirect::back()->withInput();
			}
		};
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		try {
			$post = Post::findOrFail($id);
			return View::make('posts.show')->with('post', $post);
		} catch(Exception $e) {
			App::abort(404);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with(['post' => $post]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		$post->title = Input::get('title');
		$post->content = Input::get('content');

		if($post->save()) {
			return Redirect::action('PostsController@show', $post->id);
		} else {
			return Redirect::back()->withInput();
		}

		return View::make('posts.edit')->with(['post' => $post]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return 'deletes a specific post based on ID';
	}

}
