<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateProductsTable extends Migration
    {
        public function up()
        {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->foreignId('category_id')->constrained()->cascadeOnDelete();
                $table->json('name');
                $table->json('slug');
                $table->json('description');
                $table->json('text')->nullable();
                $table->boolean('is_showcase')->default(0)->index();
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('products');
        }
    }
