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
        Schema::create('hardwareusers', function (Blueprint $table) {
            $table->foreignId('hardware_id')->constrained('equipment');
            $table->foreignId('userinfo_id')->constrained('equipment');
            $table->softDeletes();
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
        Schema::dropIfExists('contactinfos');
    }
};
