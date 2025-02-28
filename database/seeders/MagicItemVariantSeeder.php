<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\MagicItemVariant;
use App\Models\MagicItem;

class MagicItemVariantSeeder extends Seeder
{
  public function run()
  {
    $json = File::get(database_path('data/magic_items.json'));
    $magicItems = json_decode($json, true);

    foreach ($magicItems as $item) {
      if (!empty($item['variants'])) {
        $baseItem = MagicItem::where('name', $item['name'])->first();

        foreach ($item['variants'] as $variant) {
          MagicItemVariant::create([
            'magic_item_id' => $baseItem->id,
            'name' => $variant['name'],
            'description' => $variant['desc'] ?? null,
          ]);
        }
      }
    }
  }
}
