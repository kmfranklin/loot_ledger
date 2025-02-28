<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MagicItem extends Model
{
  use HasFactory;

  protected $fillable = ['name', 'rarity', 'description', 'image', 'is_variant', 'properties'];
}
