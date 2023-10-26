<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('entities', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // This column will mark the type of entity (Flora or Fauna)
            $table->string('common_name');
            $table->string('local_name');
            $table->string('latin_name');
            $table->string('english_translation');
            $table->string('biome');
            $table->text('description');
            $table->integer('quantity');
            $table->string('image_name')->nullable(); // Add a column to store image name
            $table->string('image_path')->nullable(); // Add a column to store image path
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('entities');
    }
};
