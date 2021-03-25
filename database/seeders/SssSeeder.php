<?php

    namespace Database\Seeders;

    use App\Models\Sss;
    use Illuminate\Database\Seeder;

    class SssSeeder extends Seeder
    {
        public function run()
        {
            $this->create_record(
                [
                    'tr' => '1. Şirket adı\'deki yetkilerle nasıl iletişime geçilir?',
                    'en' => '1. How to contact the authorities in the company name?',
                ],
                [
                    'tr' => 'Consectetur adipisicing elit. Corporis, nostrum accusantium debitis. Nihil fugit quis ullam autem nam tempora perspiciatis assumenda repellat omnis perferendis soluta, quae pariatur reprehenderit id iusto saepe nobis corrupti dolor quisquam recusandae voluptates. Alias labore dignissimos, deleniti temporibus odio, saepe tempore consectetur repellat dolorem nisi eius!',
                    'en' => 'Consectetur adipisicing elit. Corporis, nostrum accusantium debitis. Nihil fugit quis ullam autem nam tempora perspiciatis assumenda repellat omnis perferendis soluta, quae pariatur reprehenderit id iusto saepe nobis corrupti dolor quisquam recusandae voluptates. Alias labore dignissimos, deleniti temporibus odio, saepe tempore consectetur repellat dolorem nisi eius!',
                ], 1);

            $this->create_record(
                [
                    'tr' => '2. Neden bizi tercih etmelisiniz?',
                    'en' => '2. Why should you choose us?',
                ],
                [
                    'tr' => 'Consectetur adipisicing elit. Corporis, nostrum accusantium debitis. Nihil fugit quis ullam autem nam tempora perspiciatis assumenda repellat omnis perferendis soluta, quae pariatur reprehenderit id iusto saepe nobis corrupti dolor quisquam recusandae voluptates. Alias labore dignissimos, deleniti temporibus odio, saepe tempore consectetur repellat dolorem nisi eius!',
                    'en' => 'Consectetur adipisicing elit. Corporis, nostrum accusantium debitis. Nihil fugit quis ullam autem nam tempora perspiciatis assumenda repellat omnis perferendis soluta, quae pariatur reprehenderit id iusto saepe nobis corrupti dolor quisquam recusandae voluptates. Alias labore dignissimos, deleniti temporibus odio, saepe tempore consectetur repellat dolorem nisi eius!',
                ], 2);

            $this->create_record(
                [
                    'tr' => '3. Yapılan işin ömürü ne kadar?',
                    'en' => '3. What is the lifetime of the work done?',
                ],
                [
                    'tr' => 'Consectetur adipisicing elit. Corporis, nostrum accusantium debitis. Nihil fugit quis ullam autem nam tempora perspiciatis assumenda repellat omnis perferendis soluta, quae pariatur reprehenderit id iusto saepe nobis corrupti dolor quisquam recusandae voluptates. Alias labore dignissimos, deleniti temporibus odio, saepe tempore consectetur repellat dolorem nisi eius!',
                    'en' => 'Consectetur adipisicing elit. Corporis, nostrum accusantium debitis. Nihil fugit quis ullam autem nam tempora perspiciatis assumenda repellat omnis perferendis soluta, quae pariatur reprehenderit id iusto saepe nobis corrupti dolor quisquam recusandae voluptates. Alias labore dignissimos, deleniti temporibus odio, saepe tempore consectetur repellat dolorem nisi eius!',
                ], 3);

            $this->create_record(
                [
                    'tr' => '4. İşleri ne kadar sürede teslim ediyoruz?',
                    'en' => '4. How soon do we deliver jobs?',
                ],
                [
                    'tr' => 'Consectetur adipisicing elit. Corporis, nostrum accusantium debitis. Nihil fugit quis ullam autem nam tempora perspiciatis assumenda repellat omnis perferendis soluta, quae pariatur reprehenderit id iusto saepe nobis corrupti dolor quisquam recusandae voluptates. Alias labore dignissimos, deleniti temporibus odio, saepe tempore consectetur repellat dolorem nisi eius!',
                    'en' => 'Consectetur adipisicing elit. Corporis, nostrum accusantium debitis. Nihil fugit quis ullam autem nam tempora perspiciatis assumenda repellat omnis perferendis soluta, quae pariatur reprehenderit id iusto saepe nobis corrupti dolor quisquam recusandae voluptates. Alias labore dignissimos, deleniti temporibus odio, saepe tempore consectetur repellat dolorem nisi eius!',
                ], 4);

            $this->create_record(
                [
                    'tr' => '5. Ödeme seçenekleri nelerdir?',
                    'en' => '5. What are the payment options?',
                ],
                [
                    'tr' => 'Consectetur adipisicing elit. Corporis, nostrum accusantium debitis. Nihil fugit quis ullam autem nam tempora perspiciatis assumenda repellat omnis perferendis soluta, quae pariatur reprehenderit id iusto saepe nobis corrupti dolor quisquam recusandae voluptates. Alias labore dignissimos, deleniti temporibus odio, saepe tempore consectetur repellat dolorem nisi eius!',
                    'en' => 'Consectetur adipisicing elit. Corporis, nostrum accusantium debitis. Nihil fugit quis ullam autem nam tempora perspiciatis assumenda repellat omnis perferendis soluta, quae pariatur reprehenderit id iusto saepe nobis corrupti dolor quisquam recusandae voluptates. Alias labore dignissimos, deleniti temporibus odio, saepe tempore consectetur repellat dolorem nisi eius!',
                ], 5);

            $this->create_record(
                [
                    'tr' => '6. Yapılan işlerde KDV dahil mi?',
                    'en' => '6. Is VAT included in the work done?',
                ],
                [
                    'tr' => 'Consectetur adipisicing elit. Corporis, nostrum accusantium debitis. Nihil fugit quis ullam autem nam tempora perspiciatis assumenda repellat omnis perferendis soluta, quae pariatur reprehenderit id iusto saepe nobis corrupti dolor quisquam recusandae voluptates. Alias labore dignissimos, deleniti temporibus odio, saepe tempore consectetur repellat dolorem nisi eius!',
                    'en' => 'Consectetur adipisicing elit. Corporis, nostrum accusantium debitis. Nihil fugit quis ullam autem nam tempora perspiciatis assumenda repellat omnis perferendis soluta, quae pariatur reprehenderit id iusto saepe nobis corrupti dolor quisquam recusandae voluptates. Alias labore dignissimos, deleniti temporibus odio, saepe tempore consectetur repellat dolorem nisi eius!',
                ], 6);

            $this->create_record(
                [
                    'tr' => '7. Herhangi bir firma ile çalışıyor muyuz?',
                    'en' => '7. Do we work with any company?',
                ],
                [
                    'tr' => 'Consectetur adipisicing elit. Corporis, nostrum accusantium debitis. Nihil fugit quis ullam autem nam tempora perspiciatis assumenda repellat omnis perferendis soluta, quae pariatur reprehenderit id iusto saepe nobis corrupti dolor quisquam recusandae voluptates. Alias labore dignissimos, deleniti temporibus odio, saepe tempore consectetur repellat dolorem nisi eius!',
                    'en' => 'Consectetur adipisicing elit. Corporis, nostrum accusantium debitis. Nihil fugit quis ullam autem nam tempora perspiciatis assumenda repellat omnis perferendis soluta, quae pariatur reprehenderit id iusto saepe nobis corrupti dolor quisquam recusandae voluptates. Alias labore dignissimos, deleniti temporibus odio, saepe tempore consectetur repellat dolorem nisi eius!',
                ], 7);

            $this->create_record(
                [
                    'tr' => '8. Resmi tatil günlerinde çalışıyor muyuz?',
                    'en' => '8. Do we work on public holidays?',
                ],
                [
                    'tr' => 'Consectetur adipisicing elit. Corporis, nostrum accusantium debitis. Nihil fugit quis ullam autem nam tempora perspiciatis assumenda repellat omnis perferendis soluta, quae pariatur reprehenderit id iusto saepe nobis corrupti dolor quisquam recusandae voluptates. Alias labore dignissimos, deleniti temporibus odio, saepe tempore consectetur repellat dolorem nisi eius!',
                    'en' => 'Consectetur adipisicing elit. Corporis, nostrum accusantium debitis. Nihil fugit quis ullam autem nam tempora perspiciatis assumenda repellat omnis perferendis soluta, quae pariatur reprehenderit id iusto saepe nobis corrupti dolor quisquam recusandae voluptates. Alias labore dignissimos, deleniti temporibus odio, saepe tempore consectetur repellat dolorem nisi eius!',
                ], 8);
        }

        private function create_record(array $name, array $text, int $order)
        {
            $sss = new Sss;
            $sss->name = $name;
            $sss->text = $text;
            $sss->order = $order;
            $sss->save();
        }
    }
