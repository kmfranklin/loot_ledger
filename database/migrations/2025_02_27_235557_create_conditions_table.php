<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up()
  {
    Schema::create('conditions', function (Blueprint $table) {
      $table->id();
      $table->string('name')->unique(); // Unique condition name (e.g., Blinded, Paralyzed)
      $table->text('description'); // Store the array of descriptions as a text block
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('conditions');
  }
};
