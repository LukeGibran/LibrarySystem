<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title',255);
            $table->string('author',255);
            $table->string('subject',255);
            $table->integer('date_publish');
            $table->string('publishing_comp',255);
            $table->string('place_of_publication',255);
            $table->string('ISBN', 255);
            $table->string('status',255);
            $table->integer('cost')->nullable();
            $table->string('edition',255)->nullable();
            $table->string('added_entries',255)->nullable();
            $table->string('type_of_material',255)->nullable();
            $table->string('includes',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
