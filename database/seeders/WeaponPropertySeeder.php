<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\WeaponProperty;

class WeaponPropertySeeder extends Seeder
{
  public function run()
  {
    $json = File::get(database_path('data/weapon_properties.json'));
    $properties = json_decode($json, true);

    foreach ($properties as $property) {
      WeaponProperty::create([
        'name' => $property['name'],
        'description' => implode("\n", $property['desc']),
      ]);
    }
  }
}
