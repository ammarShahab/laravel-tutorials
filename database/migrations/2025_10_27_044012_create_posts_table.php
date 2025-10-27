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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // 1.1 created following columns then go to the phpmyadmin using  xampp => admin.then press new and name that "crud" and check any "posts" name file created or not. if not then run in terminal "php artisan migrate:fresh" then the post name folder created in the db.
            $table->string('name');
            $table->text('description');

            // 4.8 make the image nullable
            $table->string('image')->nullable();
            // Note: if any kind of change in this migration file then run in terminal "php artisan serve or php artisan migrate:fresh"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
