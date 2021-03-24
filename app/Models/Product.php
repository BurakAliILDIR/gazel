<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Product extends Model
    {
        protected $fillable = ['name', 'slug', 'description', 'text'];

        protected $casts = [
            'name' => 'json',
            'slug' => 'json',
            'description' => 'json',
            'text' => 'json',
        ];

        public function image()
        {
            return $this->morphOne(Image::class, 'imageable');
        }

        public function images()
        {
            return $this->morphMany(Image::class, 'imageable');
        }

        public function category()
        {
            return $this->morphMany(Image::class, 'categoryable');
        }
    }
