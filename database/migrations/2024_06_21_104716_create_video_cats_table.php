<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('video_cats', function (Blueprint $table) {
    //         $table->id();
    //         $table->tinyInteger("lang")->default("1");
    //         $table->integer("admin_id");
    //         $table->string("seo_title");
    //         $table->string("seo_url")->unique();
    //         $table->string("seo_h1")->nullable();
    //         $table->text("seo_canonical")->nullable();
    //         $table->text("seo_redirect")->nullable();
    //         $table->tinyInteger("seo_redirect_kind")->nullable();
    //         $table->tinyInteger("seo_index_kind")->default("1");
    //         $table->string("seo_keyword")->nullable();
    //         $table->text("seo_description")->nullable();
    //         $table->string("title");
    //         $table->integer("catid")->default(0);
    //         $table->string("pic")->nullable();
    //         $table->string("alt_pic")->nullable();
    //         $table->string("pic_banner")->nullable();
    //         $table->string("alt_pic_banner")->nullable();
    //         $table->enum("state",[0,1])->default(0);
    //         $table->enum("state_main",[0,1])->default(0);
    //         $table->integer("order")->default(0);
    //         $table->softDeletes();
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::dropIfExists('video_cats');
    // }
};
