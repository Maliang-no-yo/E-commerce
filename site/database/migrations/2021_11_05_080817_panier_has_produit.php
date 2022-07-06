<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PanierHasProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //     if (!schema::hasTable('products')) {
        //         schema::create('paniers_products', function (Blueprint $table) {
        //             $table->foreignId('id_paniers')->constrained('productss');
        //             $table->foreignId('id_products')->constrained('paniers');
        //         });
        //     }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paniers_products');
    }
}
