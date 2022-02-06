<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavigationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navigations', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->string('module_type',20)->nullable()->default('')->comment('1=Teller, 2=Admin, 3=Accounting, 4=Compliance, 5=BOS, 6-RH');
            $table->string('module_code',20)->nullable()->default('');
            $table->string('module_name',150)->nullable()->default('');
            $table->string('module_img',100)->nullable();
            $table->integer('encoded_by')->nullable()->default(0);
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
        Schema::dropIfExists('navigations');
    }
}

/*FLA will login, FLA can only see the modules she has and reports

user_locations
371,4092,2


navigation_for, navigation_route
1=Admin
2=Teller
3=Accounting
4=Reports




*/
