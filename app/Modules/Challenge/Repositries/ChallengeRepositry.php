<?php

namespace Modules\Challenge\Repositries;

use Modules\Base\Repositries\GeneralCurd;
use Modules\Challenge\Models\Challenge;

class ChallengeRepositry extends GeneralCurd
{

    public function __construct(Challenge $model)
    {
        $this->setModel($model);
    }

}
