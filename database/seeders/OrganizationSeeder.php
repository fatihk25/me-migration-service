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
            'name' => 'Mata Elang RG',
            'email' => 'merg@mail.com',
            'address' => fake()->address(),
            'province' => fake()->state(),
            'city' => fake()->city(),
            'phone_number' => fake()->phoneNumber(),
            'oinkcode' => Str::random(10),
            'website' => fake()->url(),
        ]);
    }
}
