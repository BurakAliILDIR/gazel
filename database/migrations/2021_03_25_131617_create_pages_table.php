<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreatePagesTable extends Migration
    {
        public function up()
        {
            Schema::create('pages', function (Blueprint $table) {
                $table->id();
                $table->string('name')->unique();
                $table->jsonb('title');
                $table->jsonb('description')->nullable();
                $table->jsonb('keywords')->nullable();
                $table->string('author')->nullable();
                $table->jsonb('content')->nullable();
                $table->text('css')->nullable();
                $table->text('js')->nullable();
            });
        }

        public function down()
        {
            Schema::dropIfExists('pages');
        }
    }
