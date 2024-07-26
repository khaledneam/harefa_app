<?php

namespace Modules\Question\Services;

use Modules\Question\Repositries\QuestionSubRepositry;

class QuestionSubService
{

    private QuestionSubRepositry $questionSubRepositry;

    public function __construct(QuestionSubRepositry $questionSubRepositry)
    {
        $this->questionSubRepositry = $questionSubRepositry;
    }

    public function store(array $data)
    {

        $incress = 0;
        $newArray = [];

        if (is_array($data['is_correct'])) {

            foreach ($data['choice'] as $key=>$value)
            {

                $newData['question_id'] = $data['question_id'];
                if (isset($data['is_correct'][$key]) ) {
                    $newData['is_correct'] = 1;
                }else{
                    $newData['is_correct'] = 0;
                }
                $newData['choice'] = $value;
                $newArray[$incress] = $newData;
                $incress++;

            }



        } else {
            foreach ($data['choice'] as $key=>$value)
            {

                $newData['question_id'] = $data['question_id'];
                if ($data['is_correct'] == $key) {
                    $newData['is_correct'] = 1;
                }else{
                    $newData['is_correct'] = 0;
                }
                $newData['choice'] = $value;
                $newArray[$incress] = $newData;
                $incress++;
            }

        }

        $this->questionSubRepositry->storeMulti($newArray);

    }

    public function destroyByQuestionId($id)
    {
        return $this->questionSubRepositry->destroyByQuestionId($id);
    }


}
