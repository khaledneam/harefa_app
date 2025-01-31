<?php

namespace Modules\Dashboard\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Insights;
use App\Models\Support;
use App\Models\User;
use Illuminate\Http\Request;
use Modules\Dashboard\Services\DashboardService;
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

    private DashboardService $dashboardService;

    public function __construct(VisitorService $visitorService , DawryService $dawryService , QuestionService $questionService , HezmaService $HezmaService,
    DashboardService $dashboardService)
    {

        $this->visitorService = $visitorService;
        $this->dawryService = $dawryService;
        $this->questionService = $questionService;
        $this->hezmaService = $HezmaService;
        $this->dashboardService = $dashboardService;

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



    public function dashboardCardsAjax(Request $request)
    {
        if(isset($request->days)) $days = $request->days;

        else $days = 0;

        $html = $this->dashboardService->dashboardCards($days);

         return response()->json(['html' => $html]);

    }


    public function insightsHome(){
        $insights = Insights::first();
        return view('Dashboard::insights',compact('insights'));
    }

    public function storeInsightsHome(Request $request)
    {
        Insights::UpdateOrCreate(
            ['question_count' =>$request->question_count ?? null,
                'count_judgments' => $request->count_judgments ?? null,
                'count_challenges'=>$request->count_challenges?? null,
                'count_packages'=>$request->count_packages?? null,
                'count_players'=>$request->count_players?? null,
                'count_leagues'=>$request->count_leagues?? null
            ]
        );
        return redirect()->back()->with('success', 'تم إضافة  بنجاح');
    }


    public function getSupport()
    {
        $supports = Support::paginate(2);
        return view('Dashboard::support',compact('supports'));

    }



}
