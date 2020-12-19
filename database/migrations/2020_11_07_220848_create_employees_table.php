<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('phone')->nullable();
            $table->integer('age')->nullable();
            $table->string('statistics')->nullable();
            $table->string('position')->nullable();
            $table->decimal('salary')->nullable();
            $table->string('IBAN')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->index('user_id');
            $table->unsignedBigInteger('subsidiary_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
