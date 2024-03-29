<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('input_type_id');
            $table->string('question_name');
            $table->boolean('question_required')->default(0);
            $table->boolean('answer_required')->default(0);
            $table->tinyInteger('answer_numeric')->default(0);
            $table->string('answer_text')->nullable();
            $table->tinyInteger('answer_score')->default(0);
            $table->string('answer_response_score')->nullable();
            $table->boolean('answer_boolean')->default(false);
            $table->unsignedBigInteger('option_group_id');
            $table->unsignedBigInteger('question_assessment_id')->default(0);
            $table->unsignedBigInteger('question_farmer_assessment_id')->default(0);
            $table->boolean('allow_mutiple_option_answers_yn')->default(0);
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
        Schema::dropIfExists('questions');
    }
}
