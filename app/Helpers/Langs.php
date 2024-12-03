<?php

namespace App\Helpers;

class Langs
{
    const LOCALE = [
        'en','ru','fr'
    ];
    public static function getLocale(){
        $locale = request()->segment(1, '');

        return in_array($locale, self::LOCALE) ? $locale : '';
    }

}
