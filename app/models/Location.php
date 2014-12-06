<?php

class Location extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'locations';
	protected $fillable = array('name', 'latitude', 'longitude');

	public function Complains()
	{
		return $this->hasMany('Complain');
	}

	public function Users()
	{
		return $this->hasMany('User');
	}

}
