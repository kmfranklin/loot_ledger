<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\MagicItem;

class MagicItemSeeder extends Seeder
{
  public function run()
  {
    $json = File::get(database_path('data/magic_items.json'));
    $magicItems = json_decode($json, true);

    foreach ($magicItems as $item) {
      MagicItem::create([
        'name' => $item['name'],
        'rarity' => $item['rarity']['name'] ?? null,
        'description' => implode("\n", $item['desc']),
        'image' => $item['image'] ?? null,
        'is_variant' => $item['variant'] ?? false,
      ]);
    }
  }
}
