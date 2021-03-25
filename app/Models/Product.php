<?php

    namespace App\Models;

    use App\Traits\LocalizationTools;
    use Illuminate\Database\Eloquent\Model;

    class Product extends Model
    {
        use LocalizationTools;

        protected $table = 'products';

        protected $fillable = ['name', 'slug', 'description', 'text'];

        protected $casts = [
            'name' => 'json',
            'slug' => 'json',
            'description' => 'json',
            'text' => 'json',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
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
