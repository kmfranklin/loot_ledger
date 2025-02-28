<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Equipment;

class EquipmentSeeder extends Seeder
{
  public function run()
  {
    $json = File::get(database_path('data/equipment.json'));
    $equipmentList = json_decode($json, true);

    foreach ($equipmentList as $equipment) {
      Equipment::create([
        'name' => $equipment['name'],
        'category_id' => $this->getCategoryId($equipment['equipment_category']['index'] ?? null),
        'weapon_category' => $equipment['weapon_category'] ?? null,
        'weapon_range' => $equipment['weapon_range'] ?? null,
        'category_range' => $equipment['category_range'] ?? null,
        'cost' => $equipment['cost']['quantity'] ?? null,
        'damage_dice' => $equipment['damage']['damage_dice'] ?? null,
        'damage_type_id' => $this->getDamageTypeId($equipment['damage']['damage_type']['index'] ?? null),
        'range_normal' => $equipment['range']['normal'] ?? null,
        'throw_range_normal' => $equipment['throw_range']['normal'] ?? null,
        'throw_range_long' => $equipment['throw_range']['long'] ?? null,
        'weight' => $equipment['weight'] ?? null,
        'properties' => json_encode($equipment['properties'] ?? []),
        'special' => implode("\n", $equipment['special'] ?? []),
        'description' => implode("\n", $equipment['desc'] ?? []),
      ]);
    }
  }

  private function getDamageTypeId(?string $index): ?int
  {
    if (!$index) {
      return null;
    }

    return \App\Models\DamageType::where('name', $index)->value('id');
  }

  private function getCategoryId(?string $index): ?int
  {
    if (!$index) {
      return null;
    }

    return \App\Models\EquipmentCategory::where('index', $index)->value('id');
  }
}
