<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBouteillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bouteilles', function (Blueprint $table) {
            $table->id();
            $table->string('nom',200)->nullable();
            $table->string('image',200)->nullable();
            $table->string('code_saq',50)->nullable();
            $table->string('description',200)->nullable();
            $table->string('pays',50)->nullable();
             $table->unsignedBigInteger('millesim')->nullable();
            $table->float('prix_saq')->nullable();
            $table->string('url_saq',200)->nullable();
            $table->string('url_img',200)->nullable();
            $table->string('format',200)->nullable();
            $table->unsignedBigInteger('type_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps(); 
            
            // clé etrangaire du type
             $table->foreign('type_id')
                    ->references('id')
                    ->on('types'); 
            // clé etrangaire du user
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
        Schema::dropIfExists('bouteilles');
    }
}
