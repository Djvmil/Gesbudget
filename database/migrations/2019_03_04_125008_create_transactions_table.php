<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('transactions', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->date('date');
          $table->string('type');
          $table->double('montant');
          $table->string('description');
          $table->bigInteger('idUser');
          $table->timestamps(); 
      });

      //Schema::enableForeignKeyConstraints();
    }



    /**     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
