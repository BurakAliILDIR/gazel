<?php

    namespace App\Models;

    use App\Traits\LocalizationTools;
    use Illuminate\Database\Eloquent\Model;

    class Menu extends Model
    {
        use LocalizationTools;

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
