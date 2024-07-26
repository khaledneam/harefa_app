<?php

namespace Modules\Hezma\Repositries;

use Modules\Base\Repositries\GeneralCurd;
use Modules\Hezma\Models\Hezma;

class HezmaRepositry extends GeneralCurd
{

    public function __construct(Hezma $model)
    {
         $this->setModel($model);
    }

}
