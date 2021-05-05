<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('promoteur');
            $table->string('price');
            $table->string('adresse');
            $table->string('departement');
            $table->string('rentabilite')->nullable();
            $table->longText('description');
            $table->string('type');
            $table->string('surface');
            $table->string('pieces');
            $table->string('filenames')->nullable();
            $table->string('pinel')->nullable();
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
        Schema::dropIfExists('biens');
    }
}
