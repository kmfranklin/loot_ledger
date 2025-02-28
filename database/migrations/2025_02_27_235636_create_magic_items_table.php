<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up()
  {
    Schema::create('magic_items', function (Blueprint $table) {
      $table->id();
      $table->foreignId('category_id')->nullable()->constrained('equipment_categories')->onDelete('set null');
      $table->string('name')->unique();
      $table->string('rarity')->nullable(); // Uncommon, Rare, etc.
      $table->boolean('is_variant')->default(false); // If the item has multiple versions
      $table->text('description')->nullable();
      $table->string('image')->nullable(); // Store image URLs
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('magic_items');
  }
};
