<?php

    namespace Database\Seeders;

    use App\Models\Admin;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\Hash;

    class AdminSeeder extends Seeder
    {
        public function run()
        {
            Admin::query()->truncate();
            Admin::query()->create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123123123'),
            ]);
        }
    }
