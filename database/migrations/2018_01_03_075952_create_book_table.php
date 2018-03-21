<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->increments('id');
            $table->string('book_name')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('price')->nullable();
            $table->float('price_promotion')->nullable();
            $table->string('weight')->nullable();
            $table->string('size')->nullable();
            $table->string('format_cove_book')->nullable();
            $table->DateTime('date_update')->nullable();
            $table->Date('date_release')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->nullable();
            $table->integer('publisher_id')->unsigned();
            $table->foreign('publisher_id')->references('id')->on('publisher');
            $table->integer('category_item_id')->unsigned();
            $table->foreign('category_item_id')->references('id')->on('category_item');
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
        Schema::dropIfExists('book');
    }
}
