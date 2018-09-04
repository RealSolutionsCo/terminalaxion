<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShareholdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shareholders', function (Blueprint $table) {
            $table->double('id_shareholder');
            $table->integer('id_document_type')->unsigned()->index();
            $table->string('gender');
            $table->integer('sheet_number');
            $table->string('name');
            $table->string('lastname');
            $table->string('address');
            $table->integer('phone')->unique();
            $table->integer('cellphone')->unique();
            $table->string('email')->unique();
            $table->double('account_number')->unique();
            $table->string('account_type');
            $table->string('bank_account');
            $table->timestamps();
            $table->primary('id_shareholder');
            $table->foreign('id_document_type')->references('id_document_type')
            ->on('document_types')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shareholders');
    }
}
