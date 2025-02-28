<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up()
  {
    Schema::create('spells', function (Blueprint $table) {
      $table->id();
      $table->string('name')->unique();
      $table->text('description');
      $table->text('higher_level')->nullable(); // Additional effects when cast at a higher level
      $table->string('range');
      $table->json('components'); // Stores V, S, M as a JSON array
      $table->string('material')->nullable(); // Material components
      $table->boolean('ritual')->default(false);
      $table->string('duration');
      $table->boolean('concentration')->default(false);
      $table->string('casting_time');
      $table->integer('level'); // Spell level (0 for cantrips)
      $table->string('attack_type')->nullable(); // Melee or Ranged (if applicable)
      $table->string('school'); // Stores spell school name (e.g., "Evocation")
      $table->foreignId('damage_type_id')->nullable()->constrained('damage_types')->onDelete('set null'); // Links to `damage_types`
      $table->json('damage_at_slot_level')->nullable(); // Stores damage scaling as JSON
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('spells');
  }
};
