<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_locations', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->integer('assign_location_id')->nullable()->default(0);
            $table->integer('user_id')->nullable()->default(0);
            $table->string('user_type',20)->nullable()->comment('1=Teller, 2=Admin, 3=Accounting, 4=Compliance, 5=BOS, 6-RH');
            $table->integer('status')->nullable()->default(0)->comment('1=Active,0=Inactive');
            $table->integer('approve_status_by')->nullable();
            $table->integer('assign_location_by')->nullable();
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
        Schema::dropIfExists('user_locations');
    }
}
