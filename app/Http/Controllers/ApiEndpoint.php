<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories;
use App\Exceptions;

class ApiEndpoint extends Controller
{
  public function index(Request $request)
  {
    $request->validate([
      'password' => 'required',
      'autentikasihhh' => 'required'
    ]);

    return ["status" => false];
  }
}
