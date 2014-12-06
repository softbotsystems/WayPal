<?php

class Rating extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ratings';
	protected $fillable = array('name', 'value');

	public function Complains()
	{
		return $this->hasMany('Complains');
	}

}