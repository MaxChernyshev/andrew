<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\LocaleRules;

class SubjectRequest extends FormRequest
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
        ]), [
            'image' => ['file', 'max:4096'],
//            'image' => ['file', 'image', 'mimes:png,jpeg', 'max:4096'],
        ]);
        return $rules;
    }
}
