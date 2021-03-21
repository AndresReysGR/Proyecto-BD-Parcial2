<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudoconlaravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crudoconlaravel', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->mediumText('codigo');
            $table->mediumText('descripcion');
            $table->float('cantidad');
            $table->float('precio');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crudoconlaravel');
    }
}
