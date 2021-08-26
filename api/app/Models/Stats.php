<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    use HasFactory;
    protected $fillable =['matches','runs','balls-faced','high-score','thirties','half-centuries','centuries','high-score','fours','sixes','strike-rate','wickets','average','not-outs'];
}
