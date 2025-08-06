<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BairrosController extends Controller
{
    public function index(){
      $neighborhoods = DB::table('neighborhoods')
      ->select('*')
      ->get();
      return view('neighborhood', ['neighborhoods' => $neighborhoods]);
    }
}
