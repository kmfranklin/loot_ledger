<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\DamageType;

class DamageTypeSeeder extends Seeder
{
  public function run()
  {
    $json = File::get(database_path('data/damage_types.json'));
    $damageTypes = json_decode($json, true);

    foreach ($damageTypes as $type) {
      DamageType::create([
        'name' => $type['name'],
        'description' => implode("\n", $type['desc']),
      ]);
    }
  }
}
