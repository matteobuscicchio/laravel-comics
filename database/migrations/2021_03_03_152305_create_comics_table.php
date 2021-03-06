<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('slug')->unique();
            $table->string('cover')->nullable();
            $table->boolean('availability')->default(true);
            $table->char('art_by')->nullable();
            $table->char('written_by')->nullable();
            $table->string('series')->nullable();
            $table->float('price');
            $table->date('release_date')->nullable();
            $table->integer('volume')->nullable();
            $table->string('trim_size')->nullable();
            $table->integer('page_content')->nullable();
            $table->string('rating')->nullable();
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
        Schema::dropIfExists('comics');
    }
}
