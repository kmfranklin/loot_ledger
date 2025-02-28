<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'description',
    'range',
    'components',
    'material',
    'ritual',
    'duration',
    'concentration',
    'casting_time',
    'level',
    'attack_type',
    'school',
    'damage_at_slot_level'
  ];
}
