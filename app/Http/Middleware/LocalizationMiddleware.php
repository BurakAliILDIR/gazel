<?php

    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Config;

    class LocalizationMiddleware
    {
        public function handle(Request $request, Closure $next)
        {
            $locale_codes = ['af', 'am', 'ar', 'as', 'az', 'ba', 'be', 'bg', 'bn', 'bo', 'br', 'bs', 'ca', 'co', 'cs', 'cy', 'da', 'de', 'kl', 'km',
                'fa', 'dv', 'el', 'en', 'es', 'et', 'eu', 'xh', 'yo', 'zh', 'zu', 'fi', 'tk', 'tn', 'tr', 'tt', 'ug', 'uk', 'ur', 'uz', 'vi', 'wo',
                'fo', 'fr', 'fy', 'ga', 'gd', 'gl', 'gu', 'ha', 'he', 'hi', 'hr', 'hu', 'hy', 'id', 'ig', 'ii', 'is', 'it', 'iu', 'ja', 'ka', 'kk',
                'ko', 'ky', 'lb', 'lo', 'lt', 'lv', 'mi', 'mk', 'ml', 'mn', 'mr', 'ms', 'mt', 'nb', 'ne', 'nl', 'nn', 'oc', 'or', 'pa', 'pl', 'ps',
                'ru', 'rw', 'sa', 'se', 'si', 'sk', 'sl', 'sq', 'sr', 'sv', 'sw', 'ta', 'te', 'tg', 'th', 'kn', 'pt', 'rm', 'ro',];

            $locale = $request->route()->parameter('locale');

            if (!in_array($locale, $locale_codes)) $locale = 'tr';

            Config::set('app.locale', $locale);

            return $next($request);
        }
    }

