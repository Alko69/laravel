<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')
                ->references('id')
                ->on('authors')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->integer('publication_year');
            $table->string('synopsis')->default('Aucun résumé');
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}

//  mysql -h localhost -u root p