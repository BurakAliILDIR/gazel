<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateSlidersTable extends Migration
    {
        public function up()
        {
            Schema::create('sliders', function (Blueprint $table) {
                $table->id();
                $table->json('name');
                $table->json('slug');
                $table->integer('order')->default(0)->index();
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('sliders');
        }
    }
