<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
  public function run()
  {
    // Disable foreign key checks to avoid issues while truncating tables
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    // Truncate all tables before seeding
    DB::table('users')->truncate();
    DB::table('conditions')->truncate();
    DB::table('damage_types')->truncate();
    DB::table('equipment_categories')->truncate();
    DB::table('equipment')->truncate();
    DB::table('magic_items')->truncate();
    DB::table('magic_item_variants')->truncate();
    DB::table('spells')->truncate();
    DB::table('weapon_properties')->truncate();

    // Enable foreign key checks again
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    // Run Seeders
    $this->call([
      ConditionSeeder::class,
      DamageTypeSeeder::class,
      EquipmentCategorySeeder::class,
      EquipmentSeeder::class,
      MagicItemSeeder::class,
      MagicItemVariantSeeder::class,
      SpellSeeder::class,
      WeaponPropertySeeder::class,
    ]);
  }
}
