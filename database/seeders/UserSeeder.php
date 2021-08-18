<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
		$user->first_name = 'John';
		$user->last_name = 'Doe';
		$user->email = 'john@example.com';
		$user->password = bcrypt('123456789');
		$user->save();
    }
}
