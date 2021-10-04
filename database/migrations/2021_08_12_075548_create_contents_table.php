<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id()->unique();
            $table->string("title");
            $table->longtext("content");
            $table->string("image", 191)->nullable();
            $table->string("file_path", 191)->nullable();
            $table->string("page_id")->autoIncrement();
            $table->string("tab_title");
            $table->string("meta_title");
            $table->string("meta_description");
            $table->string("meta_keywords");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content');
    }
}
