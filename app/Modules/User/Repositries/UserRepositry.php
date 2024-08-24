<?php

namespace Modules\User\Repositries;

use App\Models\User;
use Carbon\Carbon;
use Modules\Base\Repositries\GeneralCurd;

class UserRepositry extends GeneralCurd
{

    public function __construct(User $model){

        $this->setModel( $model) ;

    }




}
