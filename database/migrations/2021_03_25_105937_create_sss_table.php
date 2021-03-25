<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateSssTable extends Migration
    {
        public function up()
        {
            Schema::create('sss', function (Blueprint $table) {
                $table->id();
                $table->jsonb('name');
                $table->jsonb('text');
                $table->integer('order')->default(0)->index();
            });
        }

        public function down()
        {
            Schema::dropIfExists('sss');
        }
    }
