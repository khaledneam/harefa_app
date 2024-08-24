<?php

namespace Modules\Dashboard\Services;

use Illuminate\Support\Facades\View;
use Modules\User\Repositries\UserRepositry;
use Modules\Visitor\Repositries\VisitorRepositry;

class DashboardService
{

    private UserRepositry $userRepositry;

    private VisitorRepositry $visitorRepositry;

    public function __construct(UserRepositry $userRepositry,VisitorRepositry $visitorRepositry)
    {

        $this->userRepositry = $userRepositry;
        $this->visitorRepositry = $visitorRepositry;

    }


    public function dashboardCards($days)
    {

        $users = $this->userRepositry->getLastCountByDays($days);
        $visitors = $this->visitorRepositry->getLastCountByDays($days);

        $html = View::make('Dashboard::partials.cards', compact('users','visitors'))->render();


        return $html;

    }


}
