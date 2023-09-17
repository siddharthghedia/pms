<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //this will create a user with an admin role
        $users = User::factory(1)->create();
        foreach ($users as $user) {
            $user->assignRole(User::USER_ROLE_ADMIN);
        }

        //this will create just a user without any role
        User::factory(5)->create();
    }
}
