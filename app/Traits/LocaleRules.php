<?php

namespace App\Traits;

trait LocaleRules
{
    public function newRules($data)
    {
        $newArray = [];
        $fieldNames = [];
        $interimArray = [];
        $needed = [];

        $locales = localization()->getSupportedLocalesKeys();

        $newArray['fields'] = array_fill_keys($locales, '');

        foreach ($data as $key => $value)
        {
            $fieldNames[] = mb_substr($key, 3, strlen($key) - 2);
        }


        $fieldNames = array_unique($fieldNames);

        foreach ($data as $key => $value)
        {
            // локаль из входящего массива
            $locale = mb_substr($key, 0, 2);

            // input name из входящего массива
            $fieldName = mb_substr($key, 3, strlen($key) - 2);

            // значение input из входящего массива
            // $value

            if (in_array($locale, $locales) && in_array($fieldName, $fieldNames))
            {
                foreach ($newArray['fields'] as $k => $v) {
                    $interimArray[$locale][$fieldName] = $value;
                }
            }
            else {
                $interimArray[$key] = $value;
            }

        }

        $needed['fields'] = $interimArray;

        return $needed;
    }
}
