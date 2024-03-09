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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->longText('slug')->nullable();
            $table->text('brand');
            $table->longText('logo');
            $table->longText('cover');
            $table->longText('headimage');
            $table->longText('description')->nullable();
            $table->longText('location')->nullable();
            $table->longText('phonenumber');
            $table->longText('email')->nullable();
            $table->longText('website')->nullable();
            $table->longText('location_iframe')->nullable();
            $table->longText('gallery')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
