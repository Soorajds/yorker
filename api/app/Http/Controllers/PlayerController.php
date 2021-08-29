<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
   public function list($teamId){
      $Player = Player::where('team_id','=',$teamId)
    ->get();
      Session::put('player_id', 10);
      Session::save();
      return response()->json(['data' => $Player,'session-check' => session('player_id')],200);
   }

   public function playerDetail($TeamId){
    $Player = Player::join('stats','stats.player_id','players.id')
                    ->where('players.team_id','=',$TeamId)
                    ->get();
                    $value=Session::get('player_id');
                    $Player["sesion_check"]=$value;
    return response()->json(['data' => $Player],200);
 }
}
