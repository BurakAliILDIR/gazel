<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder
    {
        public function run()
        {
            $this->call([
                AdminSeeder::class,
                LanguageSeeder::class,
                SettingSeeder::class,
                SliderSeeder::class,
                CategorySeeder::class,
                ProductSeeder::class,
                SssSeeder::class,
                PageSeeder::class,
                MenuSeeder::class,
            ]);
        }
    }
