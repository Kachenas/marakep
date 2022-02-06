<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserNavigationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_navigations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable()->default(0);
            $table->integer('navigation_id')->nullable()->default(0);
            $table->integer('status')->nullable()->default(0)->comment('0=Viewable, 1=Unviewable');
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
        Schema::dropIfExists('user_navigations');
    }
}

