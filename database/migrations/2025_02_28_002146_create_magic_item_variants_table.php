<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up()
  {
    Schema::create('magic_item_variants', function (Blueprint $table) {
      $table->id();
      $table->foreignId('magic_item_id')->constrained()->onDelete('cascade'); // Links to base magic item
      $table->string('name')->unique();
      $table->string('rarity')->nullable();
      $table->text('description')->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('magic_item_variants');
  }
};
