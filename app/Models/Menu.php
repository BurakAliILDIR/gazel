<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Menu extends Model
    {
        public $timestamps = FALSE;
        protected $table = 'menus';
        protected $fillable = ['page_id', 'name', 'title', 'slug', 'order'];
        protected $casts = [
            'title' => 'json',
            'slug' => 'json',
        ];

        public function image()
        {
            return $this->morphOne(Image::class, 'imageable');
        }

        public function page()
        {
            return $this->hasOne(Page::class);
        }
    }
