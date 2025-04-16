<?php

namespace Database\Seeders;

use App\Models\JobCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Pertanian',
            'Perikanan',
            'Pariwisata',
            'Pendidikan',
            'Kesehatan',
            'Teknologi dan IT',
            'Konstruksi',
            'Perdagangan',
        ];

        foreach ($categories as $category) {
            // Gunakan updateOrCreate untuk menghindari duplikasi data kategori
            JobCategory::updateOrCreate(
                ['name' => $category], // Kriteria pencarian berdasarkan nama
            );
        }
    }
}
