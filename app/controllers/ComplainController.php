<?php

class ComplainController extends BaseController {

	public function home()
	{
		$page = 'complains';
		$data = array(
			'page' => $page
			);
		return View::make('complains.home', $data);
	}

	public function listAll()
	{
		return Complain::all();
	}

	public function create()
	{
		$page = 'complains';
		$data = array(
			'page' => $page
			);
		return View::make('complains.create', $data);
	}

	public function store()
	{
		$input = Input::only('name', 'description');
		$input['user_id'] = Auth::user()->id;
		Complain::create($input);
		Session::flash('message', 'Successfully Posted!');
		return "success";
	}

}