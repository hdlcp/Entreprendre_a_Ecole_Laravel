<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartenairesEntreprisesTable extends Migration
{
    public function up()
    {
        Schema::create('partenaires_entreprises', function (Blueprint $table) {
            $table->id(); // Identifiant unique
            $table->foreignId('partenaire_id')->constrained('partenaires')->onDelete('cascade'); // Clé étrangère vers Partenaires
            $table->foreignId('entreprise_id')->constrained('entreprises')->onDelete('cascade'); // Clé étrangère vers Entreprises
            $table->string('role_partenaire')->nullable(); // Rôle ou nature du partenariat
            $table->date('date_debut'); // Date de début
            $table->date('date_fin')->nullable(); // Date de fin
            $table->timestamps(); // created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('partenaires_entreprises');
    }
}
