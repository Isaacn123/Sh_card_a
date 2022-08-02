<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id');
            $table->string('name')->nullable();
            $table->integer('user_id');
            $table->string('about')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('country')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('city')->nullable();
            $table->string('company_log')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_phone')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
