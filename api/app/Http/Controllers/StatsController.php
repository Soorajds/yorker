<?php

namespace App\Http\Controllers;

use App\Models\Stats;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function show($playerId){
        $Player = Stats::where('player_id','=',$playerId)
        ->get();
        return response()->json(['data' => $Player],200);
     }
}
