<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'name' => 'Create User',
                'timestamps' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Edit User',
                'timestamps' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Delete User',
                'timestamps' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name'=> 'Read User',
                'timestamps' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Create Sensor',
                'timestamps' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Update Sensor',
                'timestamps' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Delete Sensor',
                'timestamps' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Read Sensor',
                'timestamps' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Create Organization',
                'timestamps' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Edit Organization',
                'timestamps' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Delete Organization',
                'timestamps' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Read Organization',
                'timestamps' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Create Asset',
                'timestamps' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Edit Asset',
                'timestamps' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Delete Asset',
                'timestamps' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Read Asset',
                'timestamps' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ];

        foreach($data as $key => $value) {
            DB::table('permissions')->insert([
                'name' => $value["name"],
                'created_at' => $value["timestamps"],
                'updated_at' => $value["timestamps"],
            ]);
        }
    }
}
