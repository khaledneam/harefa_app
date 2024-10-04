<?php

namespace Modules\ChallengeType\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Challenge\Models\Challenge;

class ChallengeType extends Model
{
    use HasFactory;
    protected $table = 'challenge_types';
    protected $guarded = ['*'];


    public function challenges()
    {
        return $this->hasMany(Challenge::class,'challenge_type_id','id');
    }


}
