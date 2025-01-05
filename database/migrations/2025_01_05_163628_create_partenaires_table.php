<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartenairesTable extends Migration
{
    public function up()
    {
        Schema::create('partenaires', function (Blueprint $table) {
            $table->id(); // Identifiant unique
            $table->string('nom'); // Nom du partenaire
            $table->text('description')->nullable(); // Description
            $table->string('logo')->nullable(); // URL du logo
            $table->string('site_web')->nullable(); // Site web
            $table->string('contact_principal')->nullable(); // Nom du contact principal
            $table->string('email_contact')->nullable(); // Email du contact principal
            $table->timestamps(); // created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('partenaires');
    }
}
