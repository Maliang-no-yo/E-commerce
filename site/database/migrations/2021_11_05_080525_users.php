<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!schema::hasTable('users')) {
            schema::create('users', function (Blueprint $table) {
                $table->id()->unique();
                $table->string('name')->unique();
                $table->string('email')->unique();
                $table->string('password')->unique();
                $table->boolean('admin')->default(0);
                $table->rememberToken();
                $table->timestamps();
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
        schema::dropIfExists('users');
    }
}
