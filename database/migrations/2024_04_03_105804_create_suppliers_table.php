<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('enterprise_name');
            $table->string('email')->unique();
            $table->string('enterprise_address');
            $table->string('tel');
            $table->string('enterprise_site');
            $table->enum('production_capacity', ['1000', '5000','50'])->default('1000');
            $table->enum('type_products', ['Produits locaux', 'Produits régionaux','Produits internationanux'])->default('Produits locaux');
            $table->enum('category_products', ['Viandes', 'Légumes','Céréales'])->default('Viandes');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
