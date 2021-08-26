<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained()->onDelete('cascade');
            $table->integer('matches')->default(0);
            $table->integer('runs')->default(0);
            $table->integer('balls-faced')->default(0);
            $table->integer('high-score')->default(0);
            $table->integer('thirties')->default(0);
            $table->integer('half-centuries')->default(0);
            $table->integer('centuries')->default(0);
            $table->integer('fours')->default(0);
            $table->integer('sixes')->default(0);
            $table->integer('strike-rate')->default(0);
            $table->integer('average')->default(0);
            $table->integer('note-outs')->default(0);
            $table->integer('wickets')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stats');
    }
}
