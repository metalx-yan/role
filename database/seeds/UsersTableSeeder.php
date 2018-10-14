<?php

use Illuminate\Database\Seeder;
use App\Role;
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
    	Role::create([
    		'name' => 'admin',
    		'description' => 'null'
    	]);

        Role::create([
            'name' => 'superadmin',
            'description' => 'null'
        ]);

        User::create([
        	'name' => 'aaaaaaaa',
        	'username' => 'aldian',
        	'email' => 'aldian@gmail.com',
        	'password' => Hash::make('secret'),
        	'role_id' => 1
        ]);

        User::create([
            'name' => 'test',
            'username' => 'firmansyah',
            'email' => 'firmansyah@gmail.com',
            'password' => Hash::make('firmansyah'),
            'role_id' => 2
        ]);
    }
}
