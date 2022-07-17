<?php

namespace Database\Seeders;

use App\Constants\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            "name"     => "Györkös Balázs",
            "email"    => "dfj@dfj.hu",
            "password" => bcrypt('admin'),
        ]);
        $user->assignRole(Roles::ROLE_ADMINISTRATOR);

        // User 1
        $user = User::create([
            "name"     => "User 1",
            "email"    => "user1@dfj.hu",
            "password" => bcrypt('user'),
        ]);
        $user->assignRole(Roles::ROLE_CONTENT_EDITOR);
        $user->assignRole(Roles::ROLE_REGULAR_USER);

        // User 2
        $user = User::create([
            "name"     => "User 2",
            "email"    => "user2@dfj.hu",
            "password" => bcrypt('user'),
        ]);
        $user->assignRole(Roles::ROLE_CONTENT_EDITOR);
        // User 3
        $user = User::create([
            "name"     => "User 3",
            "email"    => "user3@dfj.hu",
            "password" => bcrypt('user'),
        ]);
        $user->assignRole(Roles::ROLE_REGULAR_USER);
    }
}
