<?php

    namespace App\Models;

    use App\Traits\LocalizationTools;
    use Illuminate\Database\Eloquent\Model;

    class Category extends Model
    {
        use LocalizationTools;

        public $timestamps = FALSE;
        protected $fillable = ['name', 'slug'];
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

        public function products()
        {
            return $this->hasMany(Product::class);
        }
    }
