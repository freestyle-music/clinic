<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale', function (Blueprint $table) {
            $table->id();
            $table->string("document_no", 25)->nullable();
            $table->string("document_type", 250)->nullable();
            $table->string("pre_id", 50)->nullable();
            $table->string("description", 255)->nullable();
            $table->string("total_amount", 25)->nullable();
            $table->string("curency_code", 25)->nullable();
            $table->string("statue", 25)->nullable();
            $table->string("created_by", 50)->nullable();
            $table->string("updated_by", 50)->nullable();
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
        DB::statement('DROP VIEW IF EXISTS Sale');
    }
}