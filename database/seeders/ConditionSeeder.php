<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Condition;

class ConditionSeeder extends Seeder
{
  public function run()
  {
    $json = File::get(database_path('data/conditions.json'));
    $conditions = json_decode($json, true);

    foreach ($conditions as $condition) {
      Condition::create([
        'name' => $condition['name'],
        'description' => implode("\n", $condition['desc']), // Convert array to text
      ]);
    }
  }
}
