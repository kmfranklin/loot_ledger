<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\EquipmentCategory;

class EquipmentCategorySeeder extends Seeder
{
  public function run()
  {
    $json = File::get(database_path('data/equipment_categories.json'));
    $categories = json_decode($json, true);

    foreach ($categories as $category) {
      EquipmentCategory::create([
        'index' => $category['index'],
        'name' => $category['name'],
      ]);
    }
  }
}
