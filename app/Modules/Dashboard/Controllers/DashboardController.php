<?php

namespace Modules\Dashboard\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Modules\Dawry\Services\DawryService;
use Modules\Hezma\Services\HezmaService;
use Modules\Question\Services\QuestionService;
use Modules\Visitor\Services\VisitorService;

class DashboardController extends Controller
{

    private  VisitorService $visitorService ;
    private DawryService $dawryService;

    private QuestionService $questionService;

    private HezmaService $hezmaService;

    public function __construct(VisitorService $visitorService , DawryService $dawryService , QuestionService $questionService , HezmaService $HezmaService)
    {

        $this->visitorService = $visitorService;
        $this->dawryService = $dawryService;
        $this->questionService = $questionService;
        $this->hezmaService = $HezmaService;

    }

    public function index()
    {
        $users = User::count();
        $visitors = $this->visitorService->count();
        $dawry = $this->dawryService->count();
        $questions = $this->questionService->count();
        $hezma = $this->hezmaService->count();



        return view('Dashboard::dashboard',compact('users', 'visitors','dawry', 'questions','hezma'));
    }


}
