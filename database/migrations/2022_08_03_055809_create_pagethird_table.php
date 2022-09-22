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
        Schema::create('pagethird', function (Blueprint $table) {
            $table->id('number');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('customer_id')->on('forms')->onDelete('cascade');
            $table->float('imp_enthusiasm_of_project',2,1);
            $table->float('imp_quality_of_resources',2,1);
            $table->float('imp_fexibilty_to_handle',2,1);
            $table->float('imp_ontime_ramps',2,1);
            $table->float('sat_enthusiasm_of_project',2,1);
            $table->float('sat_quality_of_resources',2,1);
            $table->float('sat_fexibilty_to_handle',2,1);
            $table->float('sat_ontime_ramps',2,1);
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
        Schema::dropIfExists('pagethird');
    }
};
