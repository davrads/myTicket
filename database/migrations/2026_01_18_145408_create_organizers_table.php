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
        Schema::create('organizers', function (Blueprint $table) {
            $table->id();
            $table->rememberToken();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('profile_image');
            $table->string('contact');
            $table->string('address');
            $table->string('event_type');
            $table->string('status')->default('pending');
            $table->date('expire_date')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizers');
    }
};
