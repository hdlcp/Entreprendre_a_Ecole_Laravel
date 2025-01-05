<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id(); // Identifiant unique
            $table->string('nom'); // Nom de l'entreprise
            $table->text('description'); // Description de l'entreprise
            $table->date('date_creation'); // Date de création
            $table->date('date_fin')->nullable(); // Date de fermeture
            $table->string('site_web')->nullable(); // URL du site web
            $table->string('email_contact')->nullable(); // Email de contact
            $table->string('téléphone')->nullable(); // Téléphone
            $table->timestamps(); // created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('entreprises');
    }
}
