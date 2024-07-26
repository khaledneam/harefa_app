<?php

namespace Modules\Question\Repositries;

use Modules\Base\Repositries\GeneralCurd;
use Modules\Question\Models\Question;

class QuestionRepositry extends GeneralCurd
{

    public function __construct(Question $model)
    {
        $this->setModel($model);
    }

}
