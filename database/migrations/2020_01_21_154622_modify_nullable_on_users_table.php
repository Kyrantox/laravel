<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyNullableOnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table){
            $table->string('firstname')->nullable()->change();
            $table->string('lastname')->nullable()->change();
            $table->longText('bio')->nullable()->change();
            $table->string('password')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
            $table->string('remember_token')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function (Blueprint $table){
            $table->string('firstname')->change();
            $table->string('lastname')->change();
            $table->longText('bio')->change();
            $table->string('password')->change();
            $table->string('email')->change();
            $table->string('remember_token')->change();
        });
    }
}
