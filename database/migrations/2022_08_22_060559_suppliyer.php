<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Suppliyer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliyer', function (Blueprint $table) {
            $table->id();
            $table->string("sup_code", 25)->nullable();
            $table->string("sup_name", 255)->nullable();
            $table->string("sup_name_2", 255)->nullable();
            $table->string("image_url")->default('avatar5.png');
            $table->string("address", 255)->nullable();
            $table->string("phone_no", 50)->nullable();
            $table->string("phone_no_2", 50)->nullable();
            $table->string("fax_no", 50)->nullable();
            $table->string("email", 255)->nullable();
            $table->string("contact_name", 255)->nullable();
            $table->string("contact_phone", 255)->nullable();
            $table->string("thumbnail", 255)->nullable();
            $table->string("status", 50)->nullable();
            $table->string("inactived", 50)->nullable();
            $table->string("created_by", 50)->nullable();
            $table->string("updete_by", 50)->nullable();
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
        Schema::drop('suppliyer');
    }
}