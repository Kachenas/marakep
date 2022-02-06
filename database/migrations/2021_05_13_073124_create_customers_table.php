<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{

    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name',50)->default('');
            $table->string('middle_name',50)->default('');
            $table->string('last_name',50)->default('');
            $table->date('birthdate');
            $table->string('street',50)->default('');
            $table->string('barangay',50)->default('');
            $table->string('city',50)->default('');
            $table->string('province',50)->default('');
            $table->string('country',50)->default('');
            $table->string('contact_number',30)->default('');
            $table->string('valid_id',255)->default('');
            $table->string('signature',255)->default('');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
