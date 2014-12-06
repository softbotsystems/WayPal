<?php

class HomeController extends BaseController {

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

	public function maps()
	{
		$page = 'roadmaps';
		$tab = 'maps';
		$data = array(
			'page' => $page,
			'tab' => $tab
			);
		return View::make('roadmaps.home', $data);
	}

	public function routes()
	{
		$page = 'roadmaps';
		$tab = 'routes';
		$data = array(
			'page' => $page,
			'tab' => $tab
			);
		return View::make('roadmaps.home', $data);
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
