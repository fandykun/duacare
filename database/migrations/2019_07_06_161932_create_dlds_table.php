<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dlds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('graduation_year');
            $table->string('origin_address');
            $table->string('current_address');
            $table->string('email')->unique();
            
            //social media
            $table->string('phone_number');
            $table->string('line')->nullable();
            $table->string('instagram')->nullable();
            
            $table->string('bank');
            $table->string('donation_type');
            $table->decimal('amount', 12, 2);
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
        Schema::dropIfExists('dlds');
    }
}
