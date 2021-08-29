<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Player;
use App\Models\Stats;
use App\Models\Team;
use Illuminate\Support\Arr;


class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $TeamId = Team::insertGetId([
            'name' => 'Base Team',
            'user_id' => 1,
        ]);
        $batting_style=['LHB','RHB'];
        $bowling_style=['Leg-break','Off-spin','Medium-pace','seamer'];
        for($i=1;$i<31;$i++){
        $PlayerId = Player::insertGetId([
            'team_id' => $TeamId,
            'name' => 'player - '.$i,
            'age' => rand(16,36),
            'batting_style' => Arr::random($batting_style),
            'bowling_style' => Arr::random($bowling_style),
            'net_worth' => 20000,

        ]);
        Stats::insert([
            'player_id' => $PlayerId,
        ]);
    }
}
}
