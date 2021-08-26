<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
   public function list(){
      $Player = Player::all();
      return response()->json(['data' => $Player],200);
   }

   public function playerDetail($playerId){
    $Player = Player::join('stats','stats.player_id','players.id')
                    ->where('players.id','=',$playerId)
                    ->first();
    return response()->json(['data' => $Player],200);
 }
}
