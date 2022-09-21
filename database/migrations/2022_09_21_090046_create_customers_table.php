<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('NIK')->unique();
            $table->string('custName');
            $table->date('custDOB');
            $table->string('custAddress');
            $table->string('custGender');
            $table->bigInteger('custTelpNumber');
            $table->string('custJob');
            $table->string('custJobAddress');

            // Wait for employee feature
            /*
            $table->unsignedBigInteger('employee_ID');
            $table->foreign('employee_ID')->references('id')->on('employees');
            */
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
        Schema::dropIfExists('customers');
    }
}
