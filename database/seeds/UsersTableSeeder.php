<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
    		['name' => 'knhuynh', 'email' => 'knhuynhtctv@gmail.com', 'password' => Hash::make('huynhdai')],
    	);

        foreach ($users as $user) {
        	User::create($user);
        }
    }
}
