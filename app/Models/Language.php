<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Language extends Model
    {
        public $timestamps = FALSE;
        protected $fillable = ['name', 'code', 'is_active', 'default'];
        protected $casts = [
            'is_active' => 'boolean',
        ];

        public function image()
        {
            return $this->morphOne(Image::class, 'imageable');
        }
    }
