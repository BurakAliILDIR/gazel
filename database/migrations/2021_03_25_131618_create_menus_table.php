<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateMenusTable extends Migration
    {
        public function up()
        {
            Schema::create('menus', function (Blueprint $table) {
                $table->id();
                $table->foreignId('page_id')->constrained()->cascadeOnUpdate();
                $table->string('name')->unique();
                $table->jsonb('title');
                $table->jsonb('slug');
                $table->integer('order')->default(0)->index();
            });
        }

        public function down()
        {
            Schema::dropIfExists('menus');
        }
    }
