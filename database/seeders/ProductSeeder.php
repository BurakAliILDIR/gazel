<?php

    namespace Database\Seeders;

    use App\Models\Image;
    use App\Models\Product;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Str;

    class ProductSeeder extends Seeder
    {
        public function run()
        {
            Product::query()->truncate();

            for ($i = 1; $i < 7; $i++) {
                $this->create_record(
                    ['tr' => "Deneme İsim $i", 'en' => "Try Name $i"],
                    ['tr' => Str::slug("Deneme İsim $i"), 'en' => Str::slug("Try Name $i")],
                    ['tr' => "Deneme Açıklama $i", 'en' => "Try Description $i"],
                    ['tr' => "Deneme Yazı $i", 'en' => "Try Text $i"], "$i.png");
            }
        }

        private function create_record(array $name, array $slug, array $description, array $text, string $filename)
        {
            $product = new Product;
            $product->category_id = rand(1, 2);
            $product->name = $name;
            $product->slug = $slug;
            $product->description = $description;
            $product->text = $text;
            $product->is_showcase = rand(0, 1);
            $product->save();

            $image = new Image;
            $image->path = "uploads/product/$filename";
            $product->image()->save($image);
        }
    }
