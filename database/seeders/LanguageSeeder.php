<?php

    namespace Database\Seeders;

    use App\Models\Image;
    use App\Models\Language;
    use Illuminate\Database\Seeder;

    class LanguageSeeder extends Seeder
    {
        public function run()
        {
            Language::query()->truncate();

            $this->create_record('Türkçe', 'tr', TRUE, 'tr.png');

            $this->create_record('İngilizce', 'en', TRUE, 'en.png');
        }

        private function create_record(string $name, string $code, bool $is_active, string $filename)
        {
            $language = new Language;

            $language->name = $name;
            $language->code = $code;
            $language->is_active = $is_active;
            $language->save();

            $image = new Image;

            $image->path = "uploads/flag/$filename";

            $language->image()->save($image);
        }
    }
