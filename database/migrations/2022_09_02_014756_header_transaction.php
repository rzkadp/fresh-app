<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HeaderTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_header', function (Blueprint $table) {
            $table->id();
            $table->string('trx_number');
            $table->string('item_id');
            $table->string('line_number');
            $table->string('qty');
            $table->string('uom');
            $table->string('unit_standard_price');
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
