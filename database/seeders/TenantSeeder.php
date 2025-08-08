<?php

namespace Database\Seeders;

use App\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tenant::create([
            'vehicle_plate' => 'A1136BP',
            'vehicle_type' => 'Mobil',
            'brand' => 'Suzuki',
            'color' => 'Grey',
        ]);

        Tenant::create([
            'vehicle_plate' => 'A1658UO',
            'vehicle_type' => 'Mobil',
            'brand' => 'Mitsubishi',
            'color' => 'White',
        ]);

        Tenant::create([
            'vehicle_plate' => 'A1629AX',
            'vehicle_type' => 'Mobil',
            'brand' => 'Toyota',
            'color' => 'Red',
        ]);
    }
}
