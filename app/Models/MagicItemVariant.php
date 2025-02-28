<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MagicItemVariant extends Model
{
  use HasFactory;

  protected $fillable = ['magic_item_id', 'name', 'description'];
}
