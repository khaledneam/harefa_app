<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChallengesAccordingTypeRequest;
use App\Traits\ApiTraits;
use Illuminate\Http\Request;
use Modules\Challenge\Models\Challenge;
use Modules\ChallengeType\Models\ChallengeType;

class ApiGeneralController extends Controller
{
    use ApiTraits;
    public function getchallenges(){

        $challenges = Challenge::with('type')->get();
        return $this->returnSuccessResponseWithData($challenges);

    }

    public function getchallengesType()
    {
        $challengesType = ChallengeType::get();
        return $this->returnSuccessResponseWithData($challengesType);
    }

    public function getchallengesAccordingType(ChallengesAccordingTypeRequest $request)
    {

        $challenges = ChallengeType::find($request->type_id)->with('challenges')->first();
        return $this->returnSuccessResponseWithData($challenges);
    }


}
