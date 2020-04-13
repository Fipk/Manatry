<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deck', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('utilisateur_id');
            $table->integer('carte_1');
            $table->integer('carte_2');
            $table->integer('carte_3');
            $table->integer('carte_4');
            $table->integer('carte_5');
            $table->integer('carte_6');
            $table->integer('carte_7');
            $table->integer('carte_8');
            $table->integer('carte_9');
            $table->integer('carte_10');
            $table->integer('carte_11');
            $table->integer('carte_12');
            $table->integer('carte_13');
            $table->integer('carte_14');
            $table->integer('carte_15');
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
        Schema::dropIfExists('deck');
    }
}
