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
        $this->call([
            OrganizationSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            SensorSeeder::class,
            PermissionSeeder::class,
            PermissionRoleSeeder::class,
            OrganizationUserSeeder::class,
        ]);
    }
}
