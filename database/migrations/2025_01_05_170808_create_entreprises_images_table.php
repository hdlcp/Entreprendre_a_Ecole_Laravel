<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesImagesTable extends Migration
{
    public function up()
    {
        Schema::create('entreprises_images', function (Blueprint $table) {
            $table->id(); // Identifiant unique
            $table->foreignId('entreprise_id')->constrained('entreprises')->onDelete('cascade'); // Clé étrangère vers Entreprises
            $table->foreignId('image_id')->constrained('images')->onDelete('cascade'); // Clé étrangère vers Images
            $table->timestamps(); // created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('entreprises_images');
    }
}
