<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateLanguagesTable extends Migration
    {
        public function up()
        {
            Schema::create('languages', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('code')->unique()->index();
                $table->boolean('is_active')->default(0)->index();
            });
        }

        public function down()
        {
            Schema::dropIfExists('languages');
        }
    }
