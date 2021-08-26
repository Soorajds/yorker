<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Player;
use App\Models\Stats;
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
        $batting_style=['LHB','RHB'];
        $bowling_style=['Leg-break','Off-spin','Medium-pace','seamer'];
        for($i=1;$i<31;$i++){
        $PlayerId = Player::insertGetId([
            'name' => 'player - '.$i,
            'age' => rand(16,36),
            'batting-style' => Arr::random($batting_style),
            'bowling-style' => Arr::random($bowling_style),
            'net-worth' => 20000,

        ]);
        Stats::insert([
            'player_id' => $PlayerId,
        ]);
    }
}
}
