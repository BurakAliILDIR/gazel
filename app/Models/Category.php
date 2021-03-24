<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Category extends Model
    {
        public $timestamps = FALSE;
        protected $fillable = ['name', 'slug'];
        protected $casts = ['name' => 'json', 'slug' => 'json'];

        public function image()
        {
            return $this->morphOne(Image::class, 'imageable');
        }

        public function products()
        {
            return $this->hasMany(Product::class);
        }
    }
