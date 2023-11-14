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
        Schema::create('specialparts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('s_category_id');
            $table->string('title');
            $table->text('details');
            $table->string('image')->nullable();
            $table->integer('status')->default(1);
            $table->foreign('s_category_id')->references('id')->on('specialcategories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialparts');
    }
};
