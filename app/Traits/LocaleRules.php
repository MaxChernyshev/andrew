<?php

namespace App\Traits;

trait LocaleRules
{

    public function makeLocalizationRules(array $translatableFields)
    {
        $transRules = [];
        foreach (localization()->getSupportedLocalesKeys() as $key)
        {

            $isDefault = localization()->getDefaultLocale() == $key;

            foreach ($translatableFields as $name => $rules)
            {
                $reqRules = [];
                if (!(in_array('nullable', $rules) || in_array('required', $rules)))
                {
                    $reqRules = [$isDefault ? 'required' : 'nullable'];
                }

                $transRules[$key . '.' . $name] = array_merge($reqRules, $rules);
            }
        }
        return $transRules;
    }
}
