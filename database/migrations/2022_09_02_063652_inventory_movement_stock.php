<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InventoryMovementStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_movement_stock', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trans_number');
            $table->dateTime('trans_date');
            $table->string('item_id');
            $table->string('item_code');
            $table->string('line_number');
            $table->string('stock_war');
            $table->string('desc_activity');
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
        //
    }
}
