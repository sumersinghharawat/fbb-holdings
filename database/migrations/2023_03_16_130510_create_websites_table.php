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
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->text('websitename');
            $table->text('websiteemail');
            $table->text('websitecontact');
            $table->text('websitetiming');
            $table->text('websitelocation');
            $table->text('websitelocationiframe');
            $table->text('websitelogo');
            $table->text('websitefav');
            $table->text('websitelogofooter');
            $table->text('websitefacebook');
            $table->text('websitetwitter');
            $table->text('websiteinstagram');
            $table->text('websiteyoutube');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};
