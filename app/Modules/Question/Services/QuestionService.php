<?php

namespace Modules\Question\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Challenge\Services\ChallengeService;
use Modules\Dawry\Models\Dawry;
use Modules\Dawry\Services\DawryService;
use Modules\Hezma\Services\HezmaService;
use Modules\Question\Models\Question;
use Modules\Question\Repositries\QuestionRepositry;
use Yajra\DataTables\DataTables;

class QuestionService
{

    private QuestionRepositry $questionRepository;

    private QuestionSubService  $questionSubService;

    private DawryService $dawryService;

    private ChallengeService $challengeService;

    private HezmaService  $hezmaService;

    public function __construct(HezmaService  $hezmaService ,ChallengeService $challengeService,DawryService $dawryService,QuestionRepositry $questionRepository,QuestionSubService  $questionSubService)
    {
        $this->questionRepository = $questionRepository;
        $this->questionSubService = $questionSubService;
        $this->dawryService = $dawryService;
        $this->challengeService = $challengeService;
        $this->hezmaService = $hezmaService;
    }


    public function index()
    {
        $datas =  $this->questionRepository->index();
//   <a href="' . route('admin.order.show',$data->id) . '"  class="dropdown-item">'.__("service.update").'</a>

        return Datatables::of($datas)

            ->editColumn('dawry_id',function ($row){
                $name = $this->dawryService->find($row->dawry_id);
                return $name->name;
            })
            ->editColumn('challenge_id',function ($row){
                $name = $this->challengeService->find($row->challenge_id);
                return $name->name;
            })
            ->editColumn('hezma_id',function ($row){
                $name = $this->hezmaService->find($row->hezma_id);
                return $name->name;
            })
            ->editColumn('photo',function ($row){
                if (isset($row->photo)) {
                    return '<img src="' . url( $row->photo) . '" height="50"/>';
                }
            })

            ->addColumn('action', function(Question $data) {


                return '<div class="btn-group mb-1">
                             <a href="'.  route('question.destroy',$data->id).'" class="btn btn-danger">Delete</a>

                              </div>

                              ';
            })

            ->rawColumns(['id','action','photo','dawry_id','challenge_id'])
            ->make(true)
;
           // ->toJson();
    }


    public function store(array $data)
    {
      //  dd($data);
        if (isset($data['photo']))
        {
            $filename = uploadPhoto($data['photo']);
            $data['photo'] = $filename;
        }



        $is_sub = false;
        if(isset($data['choice'])){
            // Keys to extract
            $keysToExtract = ['is_correct', 'choice'];

            // New array to hold extracted items
            $newArray = [];

            foreach ($keysToExtract as $key) {
                if (array_key_exists($key, $data)) {
                    $newArray[$key] = $data[$key];
                    unset($data[$key]);
                }
            }
            $is_sub = true;
        }

            $record = $this->questionRepository->store($data);
            $newArray['question_id'] = $record['id'];
            if ($is_sub)
            $this->questionSubService->store($newArray);



    }

    public function destroy($id)
    {
        $this->questionRepository->destroy($id);
        $this->questionSubService->destroyByQuestionId($id);
        return true;

    }




}
