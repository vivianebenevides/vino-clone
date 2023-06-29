<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCelliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celliers', function (Blueprint $table) {
            $table->id();
            $table->integer('bouteille_id');
            $table->date('date_achat')->nullable();
            $table->string('garde_jusqua',200)->nullable();
            $table->string('notes',200)->nullable();        
            $table->float('prix')->nullable();
            $table->integer('quantite')->nullable();
            $table->integer('millesime')->nullable();
            $table->integer('user_id');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('celliers');
    }
}
