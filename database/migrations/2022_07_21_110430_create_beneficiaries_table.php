<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullName');
            $table->integer('age');
            $table->string('gender');
            $table->integer('phoneNumber');
            $table->string('address');
            $table->string('nationality');
            $table->string('village');
            $table->string('acres');
            $table->string('ownership');
            $table->string('memberships');
            $table->string('family_size');
            $table->string( 'assigned_Inspectors');
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
        Schema::dropIfExists('beneficiaries');
    }
}
