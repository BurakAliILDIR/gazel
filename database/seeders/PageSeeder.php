<?php

    namespace Database\Seeders;

    use App\Models\Page;
    use Illuminate\Database\Seeder;

    class PageSeeder extends Seeder
    {
        public function run()
        {
            $this->create_record('Anasayfa',
                ['tr' => 'Anasafa', 'en' => 'Home'],
                ['tr' => 'Anasafa açıklama', 'en' => 'Home description'],
                ['tr' => 'Anasafa $keywords', 'en' => 'Home $keywords'],
                ['tr' => 'Anasafa $content', 'en' => 'Home $content'],
                '$author', "css", "js");

            $this->create_record('Hakkımızda',
                ['tr' => 'Hakkımızda', 'en' => 'About'],
                ['tr' => 'Hakkımızda açıklama', 'en' => 'About description'],
                ['tr' => 'Hakkımızda $keywords', 'en' => 'About $keywords'],
                ['tr' => 'Hakkımızda $content', 'en' => 'About $content'],
                '$author', "css", "js");

            $this->create_record('Katalog',
                ['tr' => 'Katalog', 'en' => 'Catalog'],
                ['tr' => 'Katalog açıklama', 'en' => 'Catalog description'],
                ['tr' => 'Katalog $keywords', 'en' => 'Catalog $keywords'],
                ['tr' => 'Katalog $content', 'en' => 'Catalog $content'],
                '$author', "css", "js");

            $this->create_record('İletişim',
                ['tr' => 'İletişim', 'en' => 'Contact'],
                ['tr' => 'İletişim açıklama', 'en' => 'Contact description'],
                ['tr' => 'İletişim $keywords', 'en' => 'Contact $keywords'],
                ['tr' => 'İletişim $content', 'en' => 'Contact $content'],
                '$author', "css", "js");
        }

        private function create_record(string $name, array $title, array $description, array $keywords, array $content, string $author, string $css, string $js)
        {
            $page = new Page;
            $page->name = $name;
            $page->title = $title;
            $page->description = $description;
            $page->keywords = $keywords;
            $page->content = $content;
            $page->author = $author;
            $page->css = $css;
            $page->js = $js;
            $page->save();
        }
    }
