<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PrescriptionDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('prescription_details', function (Blueprint $table){
            $table->id();
            $table->integer('prescription_id')->unsigned();
            $table->string("product_no",25)->nullable();
            $table->string("unit_code",50)->nullable();  
            $table->string("price",50)->nullable();  
            $table->string("amount",20)->nullable();
            $table->string("usage",10)->nullable();
            $table->string("dosage",250)->nullable();
            $table->text("biko");
            $table->string("del_flg",1)->nullable(0); 
            $table->integer('created_user_id')->unsigned();
            $table->timestamps(); 
            $table->integer('updated_user_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('prescription_details'); 
    }
}