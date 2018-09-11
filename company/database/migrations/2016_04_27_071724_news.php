<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('news', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('title_en');
            $table->longText('content');
            $table->longText('content_en');
            $table->longText('meta');
            $table->longText('meta_en');
            $table->longText('metadescript');
            $table->longText('metadescript_en');
            $table->longText('metakeyword');
            $table->longText('metakeyword_en');
            $table->string('image');
            $table->string('url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}
