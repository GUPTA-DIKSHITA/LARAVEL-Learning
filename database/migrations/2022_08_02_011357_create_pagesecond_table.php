<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagesecond', function (Blueprint $table) {
            $table->id('number');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('customer_id')->on('forms')->onDelete('cascade');
            $table->float('imp_responsiveness', 2, 1);
            $table->float('sat_responsiveness', 2, 1);
            $table->float('imp_ability', 2, 1);
            $table->float('sat_ability', 2, 1);
            $table->string('others')->nullable();
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
        Schema::dropIfExists('pagesecond');
    }
};
