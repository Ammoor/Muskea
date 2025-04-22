<?php

namespace Database\Seeders;

use App\Models\Perfume;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PerfumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $perfumesData = json_decode(File::get(database_path('data/perfumesData.json')), true);
        foreach ($perfumesData as $index => $dataItem) {
            Perfume::create([
                'name' => $dataItem['productName'],
                'image_path' => "Images/{$index}.webp",
                'price' => $dataItem['price'],
                'old_price' => $dataItem['oldPrice'] ?? -1, // -1 means that there is no old price.
                'size' => $dataItem['size'],
                'category' => $dataItem['category'],
                'description' => $dataItem['description'],
                'available_quantity' => $dataItem['availableQuantity'],
            ]);
        }
    }
}
