<?php

class Complain extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'complains';
	protected $fillable = array('name', 'description', 'user_id');

	public function Location()
	{
		return $this->belongsTo('Location');
	}

	public function User()
	{
		return $this->belongsTo('User');
	}

	public function Rating()
	{
		return $this->belongsTo('Rating');
	}

	public function Hashtags()
	{
		return $this->belongsToMany('Rating');
	}

}