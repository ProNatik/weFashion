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
        Schema::create('quantsizes', function (Blueprint $table) {
            $table->primary(['prod_id', 'size']);
            $table->unsignedBigInteger('prod_id')->nullable(false);
            $table->string('size', 5)->nullable(false);
            $table->bigInteger('quantity')->nullable(false);

            //foreign key
            $table->foreign('prod_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quantsizes');
    }
};
