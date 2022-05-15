<?php

namespace App\Traits;

trait LocalizationRules

{
//    public function makeLocalizationRules(array $translatableFields)
//    {
//
//
//        $transRules = [];
//        foreach(localization()->getSupportedLocalesKeys() as $key) {
//
//            $isDefault = localization()->getDefaultLocale() == $key;
//
//            foreach ($translatableFields as $name => $rules) {
//                $reqRules = [];
//                if(!(in_array('nullable', $rules) || in_array('required', $rules))) {
//                    $reqRules = [$isDefault ? 'required' : 'nullable'];
//                }
//
//                $transRules[$key.'_'.$name] = array_merge($reqRules, $rules);
//            }
//        }
//
////        dd($transRules);
//        return $transRules;
//    }
//}
    public function makeLocalizationRules(bool $only_require_default, array $names) : array
    {
        $result = [];
        foreach (localization()->getSupportedLocalesKeys() as $key) {
            foreach ($names as $name => $rules) {
                $tmp_rules = [];
                $has_req = false;

                foreach ($rules as $rule) {
                    if ((strpos($rule, 'nullable') !== false) or (strpos($rule, 'required') !== false)) {
                        // if( $key == localization()->getDefaultLocale()) {
                        $has_req = true;
                        break;
                        // }
                    } else {
                        array_push($tmp_rules, $rule);
                    }
                }
                if ($has_req) {
                    $result[$key.'.'.$name] = $rules;
                } else {
                    $result[$key.'.'.$name] = array_merge([
                        ((localization()->getDefaultLocale() == $key) and $only_require_default) ? 'required' : 'nullable',
                    ], $tmp_rules);
                }
            }
        }

        return $result;
    }
}
