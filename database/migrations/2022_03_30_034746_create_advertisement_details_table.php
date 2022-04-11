<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement_details', function (Blueprint $table) {
            $table->id();
            $table->string('advertisementName');
            $table->string('advertisementData');
            $table->integer('institution_id');
            $table->integer('advertisement_size_id');
            $table->integer('newspaper_id');
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
        Schema::dropIfExists('advertisement_details');
    }
}
