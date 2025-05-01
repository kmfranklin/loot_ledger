<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class MagicItemController extends Controller
{
  public function index()
  {
    $items = [];

    $path = base_path('data/magic-items.json');

    if (File::exists($path)) {
      $items = json_decode(File::get($path), true);
    }

    return view('magic-items.index', compact('items'));
  }
}
