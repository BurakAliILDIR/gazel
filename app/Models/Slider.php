<?php

    namespace App\Models;

    use App\Traits\LocalizationTools;
    use Illuminate\Database\Eloquent\Model;

    class Slider extends Model
    {
        use LocalizationTools;

        protected $fillable = ['name', 'slug', 'order'];

        protected $casts = [
            'name' => 'json',
            'slug' => 'json',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];

        public function image()
        {
            return $this->morphOne(Image::class, 'imageable');
        }
    }
