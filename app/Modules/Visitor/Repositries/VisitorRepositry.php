<?php

namespace Modules\Visitor\Repositries;

use Modules\Base\Repositries\GeneralCurd;
use Modules\Question\Models\Question;
use Modules\Visitor\Models\Visitor;

class VisitorRepositry extends GeneralCurd
{

    public function __construct(Visitor $model)
    {
        $this->setModel($model);
    }

}
