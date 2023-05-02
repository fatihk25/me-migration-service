<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('organizations')->insert([
            'name' => 'Base Organization',
            'email' => 'your@organization.com',
            'address' => fake()->address(),
            'province' => fake()->state(),
            'city' => fake()->city(),
            'phone_number' => fake()->phoneNumber(),
            'oinkcode' => '5cf85afdf029da11eee0e4bb6703f7e349bbe3ca',
            'website' => fake()->url(),
        ]);
    }
}
