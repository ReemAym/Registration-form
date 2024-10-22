<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('full_name');
            $table->string('user_name');
            $table->date('birthdate');
            $table->string('phone');
            $table->string('address_');
            $table->string('password_');
            $table->string('confirm_password');
            $table->string('image_');
            $table->string('email');
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
        Schema::dropIfExists('students');
    }
};
