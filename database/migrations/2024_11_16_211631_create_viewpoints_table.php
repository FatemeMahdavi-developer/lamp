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
        Schema::create('viewpoints', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("position")->nullable();
            $table->string("pic")->nullable();
            $table->string("alt_pic")->nullable();
            $table->enum("state",["0","1"])->default("0");
            $table->enum("state_main",["0","1"])->default("0");
            $table->integer("order")->default("0");
            $table->integer("admin_id");
            $table->tinyInteger("lang")->default("1");
            $table->string("note",255);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viewpoints');
    }
};
