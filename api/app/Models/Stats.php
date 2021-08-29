<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    use HasFactory;
    protected $fillable =['matches','runs','balls_faced','high_score','thirties','half_centuries','centuries','fours','sixes','strike_rate','wickets','average','not_outs'];
}
