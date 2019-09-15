<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->integer('age')->unsigned();
            $table->enum('gender', ['male','female']);
            $table->bigInteger('department_id')->unsigned();
            $table->timestamps();

            // create the relationship between departments and employees table
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
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
