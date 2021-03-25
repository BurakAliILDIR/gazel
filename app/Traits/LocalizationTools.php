<?php

    namespace App\Traits;

    trait LocalizationTools
    {
        public function locale(string $key): string
        {
            $language = config('app.locale');

            return $this[$key][$language];
        }

    }
