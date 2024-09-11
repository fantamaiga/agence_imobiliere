<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  // Fonction pour afficher la vue
  public function show()
  {
    return view('admins.index');
  }
}
