<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sensors')->insert([
            'name' => 'sensor1',
            'organization_id' => 1,
            'uuid' => 'db87b9fd-eb12-4d7b-9d29-05a866d8fcb3',
            'external_subnet' => 'any',
            'mqtt_topic' => 'snoqttv5',
            'mqtt_ip' => '192.168.3.20',
            'mqtt_port' => '1883',
            'network_interface' => 'eth0',
            'protected_subnet' => '192.168.3.0',
        ]);
    }
}
