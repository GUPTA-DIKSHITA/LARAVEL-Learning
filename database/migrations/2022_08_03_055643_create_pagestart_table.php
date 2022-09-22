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
        Schema::create('pagestart', function (Blueprint $table) {
            $table->id('number');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('customer_id')->on('forms')->onDelete('cascade');
            $table->float('imp_ontime', 2, 1);
            $table->float('imp_quality', 2, 1);
            $table->float('sat_ontime', 2, 1);
            $table->float('sat_quality', 2, 1);
            $table->float('imp_operation', 2, 1);
            $table->float('imp_invoice', 2, 1);
            $table->float('sat_operation', 2, 1);
            $table->float('sat_invoice', 2, 1);
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
        Schema::dropIfExists('pagestart');
    }
};
