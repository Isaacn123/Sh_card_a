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
            $table->integer('company_id');
            $table->string('fullName');
            $table->integer('agent_id')->default(0);
            $table->integer('user_id')->default(0);
            $table->integer('age');
            $table->string('gender');
            $table->string('phoneNumber');
            $table->string('address');
            $table->string('nationality');
            $table->string('village');
            $table->string('profile_pic')->nullable();
            $table->string('acres')->nullable();
            $table->boolean('assessment_status')->default(false);
            $table->string('ownership')->nullable();
            $table->string('memberships')->nullable();
            $table->string('family_size')->nullable();
            $table->string('is_assigned_card')->default(False);
            $table->string('assigned_Inspectors')->nullable();
            $table->string('certifications')->nullable();

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
