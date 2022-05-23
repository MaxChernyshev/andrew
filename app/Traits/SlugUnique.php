<?php

namespace App\Traits;

trait SlugUnique
{
    public function slugUnique($enTitle, $model)
    {
        // проверяем на начие такого слага
        $slug = $this->checkSlug($enTitle, $model); // return boolean
//        dd($slug);

        //если слага в БД нет то возвращаем то что пришло
        if (!$slug) // FALSE
        {
//            dd('такого слага нет');
            return $enTitle;
        }

        //если такой слаг есть то добавляем цифру и проверяем опять
        else // TRUE
        {
//            dd('такой слаг ЕСТЬ!!!');
            $i = 1;

            do
            {
                if ($this->checkSlug($enTitle, $model) == true) {
                    $slug = $enTitle . '_' . $i;
                    return $slug;
                }
                $i++;

            } while ($this->checkSlug($enTitle, $model) == false);
        }
    }

    public function checkSlug($enTitle, $model): bool
    {
        $slug = $model::where('slug', $enTitle)->pluck('slug')->first();

        return $slug != null ? true : false;
    }

}
