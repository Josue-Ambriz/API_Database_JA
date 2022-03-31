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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('invoice');
            $table->float('price');
            $table->foreignId('hardware_id')->nullable()->constrained('hardwares')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('userinfo_id')->nullable()->constrained('usersinfos')->onUpdate('cascade')->onDelete('cascade');
            $table->date('purchased_on');
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
        Schema::dropIfExists('purchases');
    }
};
