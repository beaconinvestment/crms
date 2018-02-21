<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('total_amount'); // we'll use this to demonstrate searching by weight
            $table->string('customer_id'); // this will contain our foreign key to the Customer table
            $table->integer('investType'); // this will contain our foreign key to the Investment Type table

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
        Schema::dropIfExists('investment');
    }
}
