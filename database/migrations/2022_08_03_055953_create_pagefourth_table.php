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
        Schema::create('pagefourth', function (Blueprint $table) {
            $table->id('number');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('customer_id')->on('forms')->onDelete('cascade');
            $table->float('imp_accessibile',2,1);
            $table->float('sat_accessibile',2,1);
            $table->float('imp_agent',2,1);
            $table->float('imp_TL',2,1);
            $table->float('imp_PM',2,1);
            $table->float('imp_processowner',2,1);
            $table->float('sat_agent',2,1);
            $table->float('sat_TL',2,1);
            $table->float('sat_PM',2,1);
            $table->float('sat_processowner',2,1);
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
        Schema::dropIfExists('pagefourth');
    }
};
