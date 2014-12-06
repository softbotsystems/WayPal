<?php

class UserController extends BaseController {

	public function create()
	{
		$page = 'register';
		$data = array(
			'page' => $page
			);
		return View::make('users.create', $data);
	}

	public function store()
	{
		$input = Input::only('f_name', 'l_name', 'email', 'username', 'password');
		$input['password'] = Hash::make($input['password']);
		User::create($input);
		Session::flash('message', 'Successfully Registered!');
		return "success";
	}

}