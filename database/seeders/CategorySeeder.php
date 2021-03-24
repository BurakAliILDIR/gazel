<?php

    namespace Database\Seeders;

    use App\Models\Category;
    use App\Models\Image;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Str;

    class CategorySeeder extends Seeder
    {
        public function run()
        {
            $this->create_record(['tr' => "Granit Mezar", 'en' => "Granite Tomb"], ['tr' => Str::slug("Granit Mezar"), 'en' => Str::slug("Granite Tomb")], "granit.png");
            $this->create_record(['tr' => "Beyaz Mermer", 'en' => "White Marble"], ['tr' => Str::slug("Beyaz Mermer"), 'en' => Str::slug("White Marble")], "mermer.png");
        }

        private function create_record(array $name, array $slug, string $filename)
        {
            $product = new Category;
            $product->name = $name;
            $product->slug = $slug;
            $product->save();

            $image = new Image;
            $image->path = "uploads/category/$filename";
            $product->image()->save($image);
        }
    }
