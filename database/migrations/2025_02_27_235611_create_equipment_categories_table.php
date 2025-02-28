<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up()
  {
    Schema::create('equipment_categories', function (Blueprint $table) {
      $table->id();
      $table->string('index')->unique();
      $table->string('name')->unique(); // Unique category name (e.g., Weapon, Ring)
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('equipment_categories');
  }
};
