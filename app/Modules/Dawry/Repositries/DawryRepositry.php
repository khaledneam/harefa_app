<?php

namespace Modules\Dawry\Repositries;

use Modules\Base\Repositries\GeneralCurd;
use Modules\Dawry\Models\Dawry;

class DawryRepositry extends GeneralCurd
{

    public function __construct(Dawry $model)
    {
        $this->setModel($model);
    }

}
