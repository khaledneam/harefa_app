<?php

namespace Modules\Question\Repositries;

use Modules\Base\Repositries\GeneralCurd;
use Modules\Question\Models\QuestionSub;

class QuestionSubRepositry extends GeneralCurd
{

    public function __construct(QuestionSub $model)
    {
        $this->setModel($model) ;

    }

    public function destroyByQuestionId($id)
    {
     return   QuestionSub::where('question_id',$id)->delete();
    }


}
