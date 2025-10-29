<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
      $realStates = DB::table('real_states')
        ->join('neighborhoods', 'neighborhood_id', '=', 'neighborhoods.id')
        ->join('condominiums', 'condominium_id', '=', 'condominiums.id')
        ->join('real_state_types as types', 'type_id', '=', 'types.id')
        ->leftJoin('amenities', 'amenity_id', '=', 'amenities.id')
        ->select('real_states.*', 'neighborhoods.name as neighborhood_name', 'condominiums.name as condominium_name', 'types.name as type_name', 'amenities.id as amenity_id')
        ->where('real_states.publish_date', '<=', Carbon::now())
        ->limit(12)
        ->get();
      
      return view ('home', ["real_states"=>$realStates] );
    }
}
