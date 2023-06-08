<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Curency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curency', function (Blueprint $table) {
            $table->id();
            $table->string("curency_no",25)->nullable();
            $table->string("curency",25)->nullable();
            $table->string("inactived", 50)->nullable();
            $table->tinyInteger('is_deleted')->default(0);
            $table->string("created_by",50)->nullable();
            $table->string("updated_by",50)->nullable();
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
        Schema::drop('curency');
    }
}