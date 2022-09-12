<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->string('ministry');
            $table->string('departmentOrDirectorate');
            $table->string('office');
            $table->string('regionalOffice');
            $table->string('administrativeDepartment');
            $table->string('district');
            $table->string('districtLevelOffice');
            $table->string('upazila');
            $table->string('upazilaLevelOffice');
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
        Schema::dropIfExists('institutions');
    }
}
