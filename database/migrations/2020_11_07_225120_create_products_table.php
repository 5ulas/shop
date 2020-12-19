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
            $table->id();
            $table->string('name');
            $table->integer('warranty');
            $table->string('description');
            $table->string('specification');
            $table->date('stored_since');
            $table->decimal('price');
            $table->boolean('special_storing_terms');
            $table->float('volume');
            $table->float('weight');
            $table->unsignedBigInteger('feedback_id')->nullable();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('warehouse_id');
            $table->unsignedBigInteger('supplier_id');

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
