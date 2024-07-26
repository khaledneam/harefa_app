<?php

namespace Modules\Question\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Challenge\Models\Challenge;

class StoreQuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function rules(): array
    {
        $this->challengeName = $this->getChallengeName($this->challenge_id);

        return [
            'challenge_id' => 'required|exists:challenges,id',
            'dawry_id' => 'required|exists:dawries,id',
            'question' => ['nullable', function ($attribute, $value, $fail) {
                $challengeIds = [1, 2, 6, 7, 8];
                if (in_array($this->challenge_id, $challengeIds) && empty($value)) {
                    $fail('The ' . $attribute . ' field is required when the challenge is ' . $this->challengeName . '.');
                }
            }],
            'choice' => ['array', function ($attribute, $value, $fail) {
                $challengeIds = [3, 6, 7, 8];
                if (in_array($this->challenge_id, $challengeIds)) {
                    foreach ($value as $index => $choice) {
                        if (empty($choice)) {
                            $fail('The ' . $attribute . '.' . $index . ' field is required when the challenge is ' . $this->challengeName . '.');
                        }
                    }
                }
            }],
            'photo' => ['nullable', function ($attribute, $value, $fail) {
                $challengeIds = [3, 4, 5];
                if (in_array($this->challenge_id, $challengeIds) && empty($value)) {
                    $fail('The ' . $attribute . ' field is required when the challenge is ' . $this->challengeName . '.');
                }
            }],
            'description' => ['nullable', function ($attribute, $value, $fail) {
                $challengeIds = [4, 5];
                if (in_array($this->challenge_id, $challengeIds) && empty($value)) {
                    $fail('The ' . $attribute . ' field is required when the challenge is ' . $this->challengeName . '.');
                }
            }],
            'is_correct' => ['nullable', function ($attribute, $value, $fail) {
                $challengeIds = [3, 6, 7, 8];
                if (in_array($this->challenge_id, $challengeIds)) {
                    if (is_array($value)) {
                        foreach ($value as $index => $item) {
                            if (empty($item)) {

                                $fail('The ' . $attribute . '.' . $index . ' field is required when the challenge is ' . $this->challengeName . '.');
                            }
                        }
                    } elseif (empty($value)) {

                        $fail('The ' . $attribute . ' field is required when the challenge is ' . $this->challengeName . '.');
                    }
                }
            }],
        ];
    }

    protected function getChallengeName($challengeId)
    {
        $challenge = Challenge::find($challengeId);
        return $challenge ? $challenge->name : 'unknown challenge';
    }

    public function messages()
    {
        return [
            'challenge_id.required' => 'The challenge ID is required.',
            'challenge_id.exists' => 'The selected challenge ID does not exist.',
        ];
    }

}
