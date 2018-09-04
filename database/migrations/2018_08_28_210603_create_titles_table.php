<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titles', function (Blueprint $table) {
            $table->integer('id_title');
            $table->integer('id_class_title')->unsigned()->index();
            $table->integer('id_shareholder')->unsigned()->index();
            $table->integer('amount_shares');
            $table->integer('nominal_value');
            $table->integer('total_value');
            $table->foreign('id_class_title')->references('id_class_title')
            ->on('class_titles')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->primary('id_title');
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
        Schema::dropIfExists('titles');
    }
}
