<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('phone');
            $table->string('email')->uniqid();
            $table->string('address');
            $table->string('companyName');
            $table->string('city');
            $table->string('state');
            $table->string('photoUrl');
            $table->string('idUrl');
            $table->string('unique_code');
            $table->integer('isSuspended');
            $table->integer('isActive');
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
        Schema::dropIfExists('agents');
    }
}
