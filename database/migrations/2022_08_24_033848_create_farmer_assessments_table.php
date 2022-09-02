<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmerAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_assessments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agent_id')->default(0);
            $table->unsignedBigInteger('beneficiary_id')->default(0);
            $table->unsignedBigInteger('assessment_farm_id');
            $table->boolean('status')->default(false);
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('farmer_assessment_id')->default(0);
            $table->string('assessment_name');
            $table->string('assessment_description');
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
        Schema::dropIfExists('farmer_assessments');
    }
}
