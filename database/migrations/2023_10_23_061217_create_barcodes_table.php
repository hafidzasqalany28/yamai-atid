<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('barcodes', function (Blueprint $table) {
            $table->id();
            $table->string('entity_type'); // flora atau fauna
            $table->unsignedBigInteger('entity_id'); // ID entitas yang dihubungkan
            $table->string('url'); // URL yang akan dienkripsi dalam QR-Code
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barcodes');
    }
};
