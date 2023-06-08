<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PaymentAmount extends Migration
{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('payment_amount', function (Blueprint $table){
                $table->id();
                $table->string("document_no",25)->nullable();
                $table->string("document",250)->nullable();
                $table->string("document_type",255)->nullable();
                $table->string("decription",255)->nullable();
                $table->string("totale_balanec",255)->nullable();
                $table->string("exchane_rate",255)->nullable();
                $table->string("currency_code",255)->nullable();
                $table->string("paymant_amount",255)->nullable();
                $table->string("sub_code",255)->nullable();
                $table->string("inactived",255)->nullable();
                $table->string("statue",255)->nullable();
                $table->string("created_by",255)->nullable();
                $table->string("updated_by",255)->nullable();
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
            Schema::drop('payment_amount'); 
        }
    
}