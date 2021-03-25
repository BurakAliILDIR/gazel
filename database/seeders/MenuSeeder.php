<?php

    namespace Database\Seeders;

    use App\Models\Image;
    use App\Models\Menu;
    use Illuminate\Database\Seeder;

    class MenuSeeder extends Seeder
    {
        public function run()
        {
            $this->create_record(1, 'Anasayfa', ['tr' => 'Anasafa', 'en' => 'Home',], ['tr' => 'anasafa', 'en' => 'home'], 1);
            $this->create_record(2, 'Hakkımızda', ['tr' => 'Hakkımızda', 'en' => 'About',], ['tr' => 'hakkimizda', 'en' => 'about'], 2);
            $this->create_record(3, 'Katalog', ['tr' => 'Katalog', 'en' => 'Catalog',], ['tr' => 'Katalog', 'en' => 'catalog'], 3);
        }

        private function create_record(int $page_id, string $name, array $title, array $slug, int $order, string $filename = 'breadcum.jpg')
        {
            $menu = new Menu;
            $menu->page_id = $page_id;
            $menu->name = $name;
            $menu->title = $title;
            $menu->slug = $slug;
            $menu->order = $order;
            $menu->save();

            $image = new Image;
            $image->path = "uploads/breadcum/$filename";
            $menu->image()->save($image);
        }
    }
