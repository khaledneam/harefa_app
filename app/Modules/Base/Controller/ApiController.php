<?php

namespace App\Modules\Base\Controller;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSupportRequest;
use App\Models\Insights;
use App\Models\Support;
use App\Traits\ApiTraits;
use Illuminate\Support\Facades\Request;


class ApiController extends Controller
{
    use ApiTraits;
    public function getHomeInsights()
    {

        $insities = Insights::first();
        return $this->returnSuccessResponseWithData($insities);

    }


    public function storeSupport(StoreSupportRequest $request)
    {
        Support::create([
            'name' => $request->name,
            'email' => $request->email,
           'msg' => $request->msg,
        ]);

        return $this->returnSuccessResponse('Support message sent successfully');

    }


}
