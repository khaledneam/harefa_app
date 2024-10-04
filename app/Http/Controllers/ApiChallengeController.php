<?php

namespace App\Http\Controllers;

use App\Http\Requests\StartChallengeRequest;
use App\Traits\ApiTraits;
use Illuminate\Http\Request;
use Modules\Challenge\Models\Challenge;
use Modules\Question\Models\Question;

class ApiChallengeController extends Controller
{
   use ApiTraits;
   public function startChallenge(StartChallengeRequest $request)
   {
        $challenge = Challenge::where('id',$request->challenge_id)->with('type')->first();
        if ($challenge->type && $challenge->type->id == 1){
            $questions = Question::where('challenge_id',$request->challenge_id)->where('hezma_id',$request->hezma_id)
                ->where('dawry_id',$request->dawry_id)
                ->with(['sub'])->get();
            return $this->returnSuccessResponseWithData($questions);
        }
   }
}
