<?php

    namespace Database\Seeders;

    use App\Enums\Setting\SettingKeysEnum;
    use App\Models\Setting;
    use Illuminate\Database\Seeder;

    class SettingSeeder extends Seeder
    {
        public function run()
        {
            Setting::query()->truncate();

            $keys = [
                SettingKeysEnum::COMPANY_NAME,
                SettingKeysEnum::LOGO,
                SettingKeysEnum::FAVICON,
                SettingKeysEnum::PHONE,
                SettingKeysEnum::ADDRESS,
                SettingKeysEnum::EMAIL,
                SettingKeysEnum::FACEBOOK,
                SettingKeysEnum::TWITTER,
                SettingKeysEnum::INSTAGRAM,
                SettingKeysEnum::YOUTUBE,
                SettingKeysEnum::PINTEREST,
                SettingKeysEnum::WHATSAPP,
                SettingKeysEnum::TELEGRAM,
                SettingKeysEnum::LINKEDIN,
                SettingKeysEnum::GOOGLE_MAP,
                SettingKeysEnum::DEFAULT_LANGUAGE,
            ];

            foreach ($keys as $key) {
                Setting::query()->create(['_key' => $key]);
            }
        }
    }
