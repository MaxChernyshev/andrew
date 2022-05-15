<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\LocalizationRules;

class ThemeRequest extends FormRequest
{
    use LocalizationRules;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return array_merge($this->makeLocalizationRules([
            'type' => ['string', 'nullable'],
            'title' => ['string', 'max:191'],
            'description'  => ['string', 'nullable'],
        ]), [
            'status' => 'boolean',
            'image' => 'file|image|mimes:png,jpeg,gif|max:4096',
        ]);
    }
}
