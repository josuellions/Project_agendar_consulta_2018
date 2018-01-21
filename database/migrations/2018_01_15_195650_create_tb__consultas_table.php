<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb__consultas', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('cod');
            $table->date('dt_cadastro');
            $table->string('nome');
            $table->string('crm_cro');
            $table->string('categoria');
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
        Schema::dropIfExists('tb__consultas');
    }
}
