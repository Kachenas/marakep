<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{

    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('customer_id')->nullable()->unsigned();
            $table->integer('product_id')->nullable()->unsigned();
            $table->string('order_reference',50)->default('');
            $table->decimal('original_price',20,2)->default(0);
            $table->decimal('order_price',20,2)->default(0);
            $table->decimal('client_commission',20,2)->default(0);
            $table->integer('order_quantity')->nullable();
            $table->date('order_date');
            $table->string('status',50)->default('');
            $table->string('remarks',255)->default('');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
