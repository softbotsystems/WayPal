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

	public function index()
	{
		$page = 'home';
		$data = array(
			'page' => $page
			);
		return View::make('home', $data);
	}

	public function home()
	{
		$page = 'home';
		$data = array(
			'page' => $page
			);
		return View::make('home.index', $data);
	}

	public function getLogin()
	{
		$page = 'login';
		$data = array(
			'page' => $page
			);
		return View::make('partials.login.login', $data);
	}

	public function postLogin()
	{
		$credentials = Input::only('username', 'password');
		$validator = Validator::make(
		    array(
		    		'username' => 'required', 
		    		'password' => 'required'
		    	),
		    array($credentials)
		);
		if ($validator->passes()) {
			if (Auth::attempt($credentials)) {
				return "success";
			}else{
				return "error";
			}
		}
	}

	public function getLogout()
	{
		if (Auth::user()) {
			Auth::logout();
			return Redirect::to('/');
		}else{
			return Redirect::to('/');
		}
	}

}
