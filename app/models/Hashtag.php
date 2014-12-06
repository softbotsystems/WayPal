<?php

class Hashtag extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'hashtags';
	protected $fillable = array('tag');

	public function Complains()
	{
		return $this->belongsToMany('Complain');
	}

}