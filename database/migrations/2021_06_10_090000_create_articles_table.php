<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->unique();
            $table->text('categorie');
            $table->string('adresse');
            $table->string('phone');
            $table->boolean('weekdays')->nullable();
            $table->boolean('weekends')->nullable();
            $table->string('heuresouverture');
            $table->string('heuresfermeture');
            $table->longText('description');
            $table->longText('image');
            $table->string('nom')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('telephoneperso')->nullable();
            $table->string('adresseperso')->nullable();
            $table->string('facebookurl')->nullable();
            $table->string('twitterurl')->nullable();
            $table->string('googleplusurl')->nullable();
            $table->string('googlemapsurl')->nullable();
            $table->string('anneefondation')->nullable();
            $table->string('categorieservice')->nullable();


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
        Schema::dropIfExists('articles');
    }
}
