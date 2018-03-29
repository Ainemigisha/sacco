<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_records', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->integer('general_savings')->nullable();
            $table->integer('welfare_savings')->nullable();
            $table->integer('general_fine')->nullable();
            $table->integer('welfare_fine')->nullable();
            $table->integer('loans_amount')->nullable();
            $table->string('loans_interest')->nullable();
            $table->integer('number_of_shares')->nullable();
            $table->integer('shares_amount_paid')->nullable();
            $table->date('date_created');
            $table->foreign('user_id')->references('id')->on('users');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_records');
    }
}
