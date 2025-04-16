<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            'Kota Mataram',
            'Kabupaten Lombok Barat',
            'Kabupaten Lombok Timur',
            'Kabupaten Lombok Tengah',
            'Kabupaten Sumbawa',
            'Kabupaten Sumbawa Barat',
            'Kabupaten Sumbawa Selatan',
            'Kabupaten Dompu',
        ];

        foreach ($locations as $location) {
            Location::updateOrCreate(
                ['name' => $location], // Kolom yang menjadi acuan pencarian
                ['name' => $location]  // Data yang ingin diupdate atau dibuat
            );
        }
    }
}
