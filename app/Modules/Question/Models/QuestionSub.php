<?php

namespace Modules\Question\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionSub extends Model
{
    use HasFactory;
    protected $guarded = ['*'];
    protected $table = 'question_subs';

    public function question()
    {
        return $this->belongsTo(Question::class,'question_id','id');
    }
}
