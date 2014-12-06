<?php

class UserSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array('f_name' => 'Atef', 'l_name' => 'Haque', 'username' => 'atefth', 'password' => Hash::make('asdasd')));
        User::create(array('f_name' => 'Fahmida', 'l_name' => 'Zahan', 'username' => 'fahmida', 'password' => Hash::make('asdasd')));
        User::create(array('f_name' => 'Pieta', 'l_name' => '', 'username' => 'pieta', 'password' => Hash::make('asdasd')));
        User::create(array('f_name' => 'Nusrat', 'l_name' => 'Mahmud', 'username' => 'nusrat', 'password' => Hash::make('asdasd')));
        User::create(array('f_name' => 'Prima', 'l_name' => 'Tasnim', 'username' => 'prima', 'password' => Hash::make('asdasd')));
    }

}