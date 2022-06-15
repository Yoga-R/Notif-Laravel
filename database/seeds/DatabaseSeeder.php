<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // \App\User::factory(4)->create();
        // $this->call(AdminFactory::class);
        DB::table('tbladmins')->insert([
            'email'=>'yoga123@test.com',
            'password'=>bcrypt('admin123')
        ]);
    }
}
