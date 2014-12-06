<?php

class RatingSeeder extends Seeder {

	public function run()
    {
        DB::table('ratings')->delete();
        Rating::create(array('name' => 'Bad', 'value' => 1));
        Rating::create(array('name' => 'Normal', 'value' => 2));
        Rating::create(array('name' => 'Good', 'value' => 3));
    }

}