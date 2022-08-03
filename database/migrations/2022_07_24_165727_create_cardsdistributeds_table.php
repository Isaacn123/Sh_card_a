<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsdistributedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardsdistributeds', function (Blueprint $table) {
            $table->increments('distribution_id');
            $table->integer('company_id');
            $table->integer('agent_id');
            $table->string('beneficiary');
            $table->string('card_scanned');
            $table->string('delivery_status');
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
        Schema::dropIfExists('cardsdistributeds');
    }
}
