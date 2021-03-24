<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Setting extends Model
    {
        public $timestamps = FALSE;
        protected $table = 'settings';
        protected $primaryKey = '_key';
        protected $fillable = ['_key', 'value'];

        public function image()
        {
            return $this->morphOne(Image::class, 'imageable');
        }
    }
