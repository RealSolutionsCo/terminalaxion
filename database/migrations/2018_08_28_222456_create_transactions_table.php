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
            $table->increments('id_transaction');
            $table->integer('id_title');
            $table->integer('id_transaction_type')->unsigned()->index();
            $table->double('id_holder');
            $table->double('id_addressee');
            $table->integer('n_transferred_actions');
            $table->integer('id_father_title');
            $table->string('title_class');
            $table->integer('value_father_title');
            $table->integer('n_father_actions');
            $table->integer('id_son_title');
            $table->integer('value_son_title');
            $table->integer('n_son_actions');
            $table->date('date_transaction');
            $table->integer('n_aprobation');
            $table->string('observations');
            $table->foreign('id_title')->references('id_title')
            ->on('titles')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('id_transaction_type')->references('id_transaction_type')
            ->on('transaction_types')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('id_holder')->references('id_shareholder')
            ->on('shareholders')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('id_addressee')->references('id_shareholder')
            ->on('shareholders')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('id_father_title')->references('id_title')
            ->on('titles')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('id_son_title')->references('id_title')
            ->on('titles')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
