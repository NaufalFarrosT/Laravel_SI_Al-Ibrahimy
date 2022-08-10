<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employeeName');
            $table->string('employeeUsername');
            $table->string('employeePassword');
            $table->date('employeeDOB');
            $table->string('employeeAddress');
            $table->string('employeeGender');
            $table->integer('employeeTelpNumber');
            $table->integer('employeeBasicSalary');

            $table->unsignedBigInteger('position_ID');
            $table->foreign('position_ID')->references('id')->on('positions');
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
        Schema::dropIfExists('employees');
    }
}
