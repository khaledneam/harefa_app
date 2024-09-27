<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insights extends Model
{
    use HasFactory;

    protected $fillable = ['question_count', 'count_judgments', 'count_challenges', 'count_packages', 'count_players', 'count_leagues'];

}
