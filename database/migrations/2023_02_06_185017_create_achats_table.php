<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achats', function (Blueprint $table) {
            $table->id();
            $table->string('produit');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('annonceur');
            $table->integer('nombre');
            $table->string('axe');
            $table->string('operateur');
            $table->string('telephone');
            $table->float('prix');
            $table->string('etat');
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
        Schema::dropIfExists('achats');
    }
};
