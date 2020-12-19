<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('creation_date');
            $table->date('period');
            $table->string('status');
            $table->boolean('done');
            $table->string('delivery_address');
            $table->decimal('discount');
            $table->decimal('price');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('fees_id')->nullable();

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
        Schema::dropIfExists('orders');
    }
}
