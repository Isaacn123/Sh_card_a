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
            $table->integer('beneficiary_uid')->defaults(0);
            $table->string('fullName');
            $table->integer('age');
            $table->string('gender');
            $table->string('phoneNumber');
            $table->string('address');
            $table->string('nationality');
            $table->string('village');
            $table->string('acres');
            $table->string('ownership');
            $table->string('memberships');
            $table->string('family_size');
            $table->string('is_assigned_card')->default(False);
            $table->string('assigned_Inspectors')->nullable();
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
