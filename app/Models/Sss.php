<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Sss extends Model
    {
        public $timestamps = FALSE;
        protected $table = 'sss';
        protected $fillable = ['name', 'text', 'order'];
        protected $casts = [
            'name' => 'json',
            'text' => 'json',
        ];

    }
