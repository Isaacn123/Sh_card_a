<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('company_id');
            $table->string('user_status')->default('admin');
            $table->string('training_id');
            $table->string('training_name');
            $table->string('training_description');
            $table->string('training_start_date');
            $table->string('training_end_date');
            $table->biginteger('no_of_beneficiaries')->default(0);
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
        Schema::dropIfExists('trainings');
    }
}
