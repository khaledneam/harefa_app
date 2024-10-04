<?php

namespace Modules\Question\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded = ['*'];
    protected $table = 'questions';


    public function sub()
    {
        return $this->hasMany(QuestionSub::class,'question_id','id');
    }

}
