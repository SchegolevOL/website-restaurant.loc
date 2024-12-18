<?php

namespace App\Helpers;

class Langs
{
    const LOCALE = [
        'en','ru'
    ];

    public static function getLocale(){
        $locale = request()->segment(1, '');

        return in_array($locale, self::LOCALE) ? $locale : '';
    }


    public static function gerUrl($locale){
        $url =url()->previous();

        $url_parsed = parse_url($url);

        $url_parsed['path']=explode('/',$url_parsed['path']);
        $url_parsed['path'] = implode('/',array_diff($url_parsed['path'],self::LOCALE));
        if ($locale != env('APP_LOCALE')) {
            $url_parsed['path'] = '/'.$locale.$url_parsed['path'];
        }

        if (array_key_exists('query',$url_parsed))

            return $url_parsed['path'].'?'.$url_parsed['query'];
        return $url_parsed['path'];

    }

}
