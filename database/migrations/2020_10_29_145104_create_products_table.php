<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->double('price', 10, 2);
            $table->string('type')->nullable();
            $table->string('qnt')->nullable();
            $table->string('min_qnt')->nullable();
            $table->string('img_url')->nullable();

            $table->integer('updated_by')->nullable();
            $table->enum('status', ['0', '1'])->default('0');
            $table->timestamps();


        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
