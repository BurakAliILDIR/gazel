<?php

    namespace App\Models;

    use App\Traits\LocalizationTools;
    use Illuminate\Database\Eloquent\Model;

    class Page extends Model
    {
        use LocalizationTools;

        public $timestamps = FALSE;
        protected $table = 'pages';
        protected $fillable = ['name', 'title', 'description', 'keywords', 'author', 'content', 'css', 'js'];
        protected $casts = [
            'title' => 'json',
            'description' => 'json',
            'keywords' => 'json',
            'author' => 'json',
            'content' => 'json',
        ];

// menu relation
//        public function menu()
//        {
//            return $this->belongsTo(Menu::class);
//        }

    }
