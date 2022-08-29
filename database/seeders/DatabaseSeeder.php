<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //seeds default roles
        $this->call(RoleSeeder::class);

        //seeds default admin with roles assigned
        $this->call(AdminSeeder::class);

        //creates 100 fake users with a role assigned
        $fakeUsers = 0;
        while($fakeUsers < 100){
            $this->call(UserSeeder::class);
            $fakeUsers++;
        }
    }
}
