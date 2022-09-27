<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DateWorkshop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('date_workshop', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('date_id');
            $table->unsignedBigInteger('workshop_id');
            $table->timestamps();
            $table->foreign('date_id')
                ->references('id')
                ->on('dates')
                ->onDelete('cascade');
            $table->foreign('workshop_id')
                ->references('id')
                ->on('workshops')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('date_workshop');
    }
}
