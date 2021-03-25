<?php

    namespace App\Models;

    use App\Traits\LocalizationTools;
    use Illuminate\Database\Eloquent\Model;

    class Sss extends Model
    {
        use LocalizationTools;

        public $timestamps = FALSE;
        protected $table = 'sss';
        protected $fillable = ['name', 'text', 'order'];
        protected $casts = [
            'name' => 'json',
            'text' => 'json',
        ];

    }
