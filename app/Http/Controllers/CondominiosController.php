<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CondominiosController extends Controller
{
    public function index(){
      $condominiums = DB::table('condominiums')
      ->select('*')
      ->get();
      return view('Condominios', ['condominiums' => $condominiums]);
    }
}
