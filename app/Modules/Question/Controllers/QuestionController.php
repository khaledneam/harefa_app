<?php

namespace Modules\Question\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Modules\Challenge\Services\ChallengeService;
use Modules\Dawry\Services\DawryService;
use Modules\Hezma\Services\HezmaService;
use Modules\Question\Requests\StoreQuestionRequest;
use Modules\Question\Services\QuestionService;

class QuestionController extends Controller
{
    private ChallengeService $challenges;
    private QuestionService $questions;

    private DawryService  $dawryService;

    private HezmaService  $hezmaService;

    public function __construct(HezmaService  $hezmaService ,ChallengeService $challenges , QuestionService $questions , DawryService  $dawryService)
    {
        $this->challenges = $challenges;
        $this->questions = $questions;
        $this->dawryService = $dawryService;
        $this->hezmaService = $hezmaService;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->questions->index();
        }else{
            return view('Question::index');
        }

    }

    public function create()
    {
        $dawries = $this->dawryService->all();
        $challenges = $this->challenges->index();
        $hezmas = $this->hezmaService->all();

        return view('Question::create',compact('challenges','dawries','hezmas'));
    }

    public function store(StoreQuestionRequest $request)
    {
        $data = $request->except('_token');
        $this->questions->store($data);
        return redirect()->back()->with('success', 'تم إضافة السؤال بنجاح');
    }

    public function destroy($id)
    {
         $this->questions->destroy($id);
        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }



}
