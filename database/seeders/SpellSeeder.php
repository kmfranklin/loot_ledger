<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Spell;

class SpellSeeder extends Seeder
{
  public function run()
  {
    $json = File::get(database_path('data/spells.json'));
    $spells = json_decode($json, true);

    foreach ($spells as $spell) {
      Spell::create([
        'name' => $spell['name'],
        'description' => implode("\n", $spell['desc']),
        'range' => $spell['range'],
        'attack_type' => $spell['attack_type'] ?? null,
        'school' => $spell['school']['name'],
        'level' => $spell['level'],
        'damage_at_slot_level' => json_encode($spell['damage_at_slot_level'] ?? null),
      ]);
    }
  }
}
