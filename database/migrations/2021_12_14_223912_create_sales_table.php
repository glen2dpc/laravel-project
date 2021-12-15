<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->integer('ORDERNUMBER')->nullable();
            $table->integer('QUANTITYORDERED')->nullable();
            $table->string('PRICEEACH')->nullable();
            $table->integer('ORDERLINENUMBER')->nullable();
            $table->string('SALES')->nullable();
            $table->string('ORDERDATE')->nullable();
            $table->string('STATUS')->nullable();
            $table->integer('QTR_ID')->nullable();
            $table->integer('MONTH_ID')->nullable();
            $table->integer('YEAR_ID')->nullable();
            $table->string('PRODUCTLINE')->nullable();
            $table->integer('MSRP')->nullable();
            $table->string('PRODUCTCODE')->nullable();
            $table->string('CUSTOMERNAME')->nullable();
            $table->string('PHONE')->nullable();
            $table->string('ADDRESSLINE1')->nullable();
            $table->string('ADDRESSLINE2')->nullable();
            $table->string('CITY')->nullable();
            $table->string('STATE')->nullable();
            $table->string('POSTALCODE')->nullable();
            $table->string('COUNTRY')->nullable();
            $table->string('TERRITORY')->nullable();
            $table->string('CONTACTLASTNAME')->nullable();
            $table->string('CONTACTFIRSTNAME')->nullable();
            $table->string('DEALSIZE')->nullable();

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
        Schema::dropIfExists('sales');
    }
}
