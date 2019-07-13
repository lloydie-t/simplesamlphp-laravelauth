<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'name' => 'John Doe',
            'email' => 'testuser@kitbooker.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10),
            'group' => 99,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $users = factory(App\User::class, 10)->create();
    }
}
