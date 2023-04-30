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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20)->nullable(false);
            $table->text('description');
            $table->float('price')->nullable(false);
            $table->string('picture', 100)->nullable(false);
            $table->enum('state', ['standard', 'solde'])->nullable(false);
            $table->string('reference', 100)->nullable(true);
            $table->timestamps();

            //foreign key
            $table->unsignedBigInteger('category_id')->index();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
