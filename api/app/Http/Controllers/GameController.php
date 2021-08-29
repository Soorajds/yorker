<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    
    public function start($playerId)
    {
        $user = Game::firstOrNew([
            'player_id' => $playerId,
        ]);
        
        if ($user->exists) {
            return "there is an unfinished match";
        } else {
            app
        }
        
    }

   
}
