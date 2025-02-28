<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up()
  {
    Schema::create('damage_types', function (Blueprint $table) {
      $table->id();
      $table->string('name')->unique(); // Unique name (e.g., Acid, Fire, Cold)
      $table->text('description'); // Stores multi-line descriptions
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('damage_types');
  }
};
