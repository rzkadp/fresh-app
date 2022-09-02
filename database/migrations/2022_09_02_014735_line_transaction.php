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
            $table->string('employee_id');
            $table->string('trx_number');
            $table->string('trx_code');
            $table->date('trx_date');
            $table->string('employee_name');
            $table->string('employee_departement');
            $table->string('user_entry');
            $table->dateTime('keyin_date');
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
        // Schema::dropIfExists('line_transaction');
    }
}
