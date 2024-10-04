<?php

namespace Modules\Challenge\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\ChallengeType\Models\ChallengeType;

class Challenge extends Model
{
    use HasFactory;
    protected $table = 'challenges';
    protected $guarded = ['*'];


    public function type()
    {
        return $this->belongsTo(ChallengeType::class,'challenge_type_id','id');
    }

}
