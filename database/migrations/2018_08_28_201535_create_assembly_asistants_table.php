<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssemblyAsistantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assembly_asistants', function (Blueprint $table) {
            $table->integer('id_assembly')->unsigned()->index();
            $table->double('id_shareholder');
            $table->integer('participation_percentage');
            $table->foreign('id_assembly')->references('id_assembly')
            ->on('assemblies')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('id_shareholder')->references('id_shareholder')
            ->on('shareholders')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->primary('id_assembly');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assembly_asistants');
    }
}
