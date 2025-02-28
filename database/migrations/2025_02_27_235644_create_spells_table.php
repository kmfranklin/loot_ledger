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
      $table->string('range');
      $table->string('attack_type')->nullable(); //attack type (melee/ranged)
      $table->string('school'); // Store spell school as a simple string instead of a foreign key
      $table->integer('level');
      $table->json('damage_at_slot_level')->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('spells');
  }
};
