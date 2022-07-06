<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!schema::hasTable('products')) {
            schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name', 50);
                $table->string('category', 50);
                $table->string('resume', 500);
                $table->string('description', 500);
                $table->float('price');
                $table->string('picture', 900);
                $table->integer('quantity');
                $table->rememberToken();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('products');
    }
}
