<?php

namespace Database\Seeders;

use App\Constants\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::create(['name' => Roles::ROLE_ADMINISTRATOR]);
        Role::create(['name' => Roles::ROLE_CONTENT_EDITOR]);
        Role::create(['name' => Roles::ROLE_REGULAR_USER]);
    }
}
