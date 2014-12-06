<?php

class HashtagSeeder extends Seeder {

	public function run()
    {
        DB::table('hashtags')->delete();
        Hashtag::create(array('tag' => 'Broken'));
        Hashtag::create(array('tag' => 'No Roads'));
        Hashtag::create(array('tag' => 'Dangerous'));
    }

}