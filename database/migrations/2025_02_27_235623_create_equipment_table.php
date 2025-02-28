<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up()
  {
    Schema::create('equipment', function (Blueprint $table) {
      $table->id();
      $table->foreignId('category_id')->nullable()->constrained('equipment_categories')->onDelete('set null');
      $table->string('name')->unique();
      $table->string('weapon_category')->nullable(); // Simple, Martial (Only for weapons)
      $table->string('weapon_range')->nullable(); // Melee, Ranged (Only for weapons)
      $table->string('category_range')->nullable(); // Simple Melee, Martial Ranged
      $table->integer('cost')->nullable(); // Cost in GP
      $table->string('damage_dice')->nullable(); // e.g., "1d4"
      $table->foreignId('damage_type_id')->nullable()->constrained('damage_types')->onDelete('set null');
      $table->integer('range_normal')->nullable(); // Normal attack range
      $table->integer('throw_range_normal')->nullable(); // Throw range (normal)
      $table->integer('throw_range_long')->nullable(); // Throw range (long)
      $table->integer('weight')->nullable();
      $table->json('properties')->nullable(); // Stores properties like "Light", "Thrown"
      $table->text('special')->nullable(); // Special rules like Lance's mounted requirement
      $table->text('description')->nullable(); // Description for non-weapons
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('equipment');
  }
};
