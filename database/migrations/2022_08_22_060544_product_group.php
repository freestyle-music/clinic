<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_group', function (Blueprint $table) {
            $table->id();
            $table->string("group_code",25)->nullable();
            $table->string("group_name",255)->nullable();
            $table->string("image_url",255)->nullable();
            $table->string("group_name_2", 255)->nullable();
            $table->string("brand_code",25)->nullable();
            $table->string("cat_code", 25)->nullable();
            $table->string("inactived", 50)->nullable();
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
        Schema::drop('product_group');
    }
}