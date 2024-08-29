<?php

namespace App\Http\Requests;

use App\Traits\ApiTraits;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Nette\Schema\ValidationException;
use Symfony\Component\HttpFoundation\Response;

abstract class ApiRequest extends FormRequest
{
    use ApiTraits;
    /**
     * Determine if the user is authorized to make this request.
     */
  abstract  public function authorize();

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
   abstract public function rules();


    protected function failedValidation(Validator $validator)
    {
        $errors = (new \Illuminate\Validation\ValidationException($validator))->errors();

        if (!empty($errors))
        {
            throw new HttpResponseException(
               $this->returnValidationError($validator)
            );
        }

    }




}
