<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\LocaleRules;

class QuestionRequest extends FormRequest
{
    use LocaleRules;

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = array_merge($this->makeLocalizationRules([
            'title' => ['string', 'max:191'],
            'content' => ['string', 'nullable'],
            'answer' => ['string', 'nullable'],
        ]), [
            'image' => ['file', 'image', 'mimes:png,jpeg', 'max:4096'],
            'subject_id' => ['exists:subjects,id'],
        ]);
        return $rules;
    }
}
