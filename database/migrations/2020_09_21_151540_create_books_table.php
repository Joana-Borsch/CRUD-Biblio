<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{

    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('edition');
            $table->foreignId('author_id')->nullable();
            $table->foreign('author_id')->references('id')->on('authors');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('book');
    }
}
