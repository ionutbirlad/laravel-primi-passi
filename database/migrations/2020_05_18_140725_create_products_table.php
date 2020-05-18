<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->mediumText('src');
            $table->mediumText('src-h');
            $table->mediumText('src-p');
            $table->string('titolo', 40);
            $table->string('tipo', 15);
            $table->integer('cottura');
            $table->integer('peso');
            $table->mediumText('descrizione');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
