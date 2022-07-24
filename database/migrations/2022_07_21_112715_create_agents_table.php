<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullName');
            $table->integer('age');
            $table->integer('agent_id');
            $table->integer('agent_pin');
            $table->string('password');
            $table->string('gender');
            $table->integer('phoneNumber');
            $table->string('address');
            $table->string('nationality');
            $table->string('village');
            $table->string('assigned_assets');
            $table->string('assigned_farmer');
            $table->string('certifications');
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
        Schema::dropIfExists('agents');
    }
}
