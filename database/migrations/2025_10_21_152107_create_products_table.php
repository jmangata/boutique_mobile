<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Category_Id')->constrained('Categories')->onDelete('cascade');
            $table->string("name");
            $table->string("image")->nullable();
            $table->text("description")->nullable();
            $table->boolean("news")->default();
            $table->float("price",10,2);//10 caractères et deux chiffre après la virgule// 
            $table->timestamps();
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
