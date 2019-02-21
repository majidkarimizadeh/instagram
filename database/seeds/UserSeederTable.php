<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'  =>  'user',
    		'email'	=>	'superuser@reactd.com',
    		'password'	=>	bcrypt('123456')
    	]);

		$role = Role::create([
			'name'	=>	'Owner',
			'slug'	=>	'owner'
		]);

		$user->roles()->attach($role);
    }
}
