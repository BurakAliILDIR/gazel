<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateImagesTable extends Migration
    {
        public function up()
        {
            Schema::create('images', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('imageable_id')->index();
                $table->string('imageable_type')->index();
                $table->text('path');
                $table->timestamps();

                $table->index(['imageable_id', 'imageable_type']);
            });
        }

        public function down()
        {
            Schema::dropIfExists('images');
        }
    }
