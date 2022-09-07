<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LineTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_line', function (Blueprint $table) {
            $table->id();
            $table->string('trx_number');
            $table->string('line_number');
            $table->string('item_id');
            $table->string('item_code');
            $table->string('description');
            $table->string('qty');
            $table->string('amount');
            $table->string('uom');
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
        Schema::dropIfExists('line_transaction');
    }
}
