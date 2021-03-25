<?php

    namespace Database\Seeders;

    use App\Models\Image;
    use App\Models\Slider;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Str;

    class SliderSeeder extends Seeder
    {
        public function run()
        {
            Slider::query()->truncate();

            $this->create_record([
                'tr' => 'Birinci Fotoğraf',
                'en' => 'One Photo ',
            ], [
                'tr' => Str::slug('Birinci Fotoğraf'),
                'en' => Str::slug('One Photo'),
            ], '1.jpg');

            $this->create_record([
                'tr' => 'İkinci Fotoğraf',
                'en' => 'Two Photo ',
            ], [
                'tr' => Str::slug('İkinci Fotoğraf'),
                'en' => Str::slug('Two Photo'),
            ], '2.jpg');

            $this->create_record([
                'tr' => 'Üçüncü Fotoğraf',
                'en' => 'Three Photo ',
            ], [
                'tr' => Str::slug('Üçüncü Fotoğraf'),
                'en' => Str::slug('Three Photo'),
            ], '3.jpg');
        }

        private function create_record(array $name, array $slug, string $filename)
        {
            $slider = new Slider;

            $slider->name = $name;
            $slider->slug = $slug;
            $slider->save();

            $image = new Image;
            $image->path = "uploads/slider/$filename";
            $slider->image()->save($image);
        }
    }
