<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssembliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assemblies', function (Blueprint $table) {
            $table->increments('id_assembly');
            $table->date('date_assembly');
            $table->integer('id_assembly_type')->unsigned()->index();
            $table->string('assembly_resolution');
            $table->string('assembly_name');
            $table->string('assembly_observation');
            $table->string('assembly_cuorum');
            $table->foreign('id_assembly_type')->references('id_assembly_type')
            ->on('assembly_types')->onUpdate('CASCADE')->onDelete('RESTRICT');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assemblies');
    }
}
