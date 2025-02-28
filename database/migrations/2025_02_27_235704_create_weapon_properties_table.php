<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up()
  {
    Schema::create('weapon_properties', function (Blueprint $table) {
      $table->id();
      $table->string('name')->unique(); // Unique property name (e.g., Finesse, Heavy)
      $table->text('description'); // Stores multi-line descriptions
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('weapon_properties');
  }
};
