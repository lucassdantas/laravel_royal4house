<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
      $realStates = DB::table('real_states')
        ->join('neighborhoods', 'neighborhood_id', '=', 'neighborhood.id' )
        ->join('condominium', 'condominium_id', '=', 'condominium.id' )
        ->join('type', 'type_id', '=', 'type.id' )
        ->join('amenities', 'amenities_id', '=', 'amenities.id' )
        ->select('real_states.*', 'neighborhoods.name', 'condominium.name', 'type.name', 'amenities.id');
      
      return view ('home', ["real_states"=>$realStates] );
    }
}
