<?php

namespace Modules\ChallengeType\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChallengeType extends Model
{
    use HasFactory;
    protected $table = 'challenge_types';
    protected $guarded = ['*'];
}
