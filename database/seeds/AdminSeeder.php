<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([
            'name' => 'Admin',
            'email' => 'deep@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$FVfqAbCMfBwvjzJDqk.OoOXWtM8PnYU/1hbvtsM43UgVhNpjqN0o6', // 123456789
            'remember_token' => Str::random(10),
        ]);
    }
}
