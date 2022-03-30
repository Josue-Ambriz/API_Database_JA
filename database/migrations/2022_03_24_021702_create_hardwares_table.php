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
        Schema::create('hardwares', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('hwcategory_id')->constrained('hwcategories');
            $table->string('cpu');
            $table->string('ram');
            $table->string('storage');
            $table->string('software');
            $table->foreignId('manufacturer_id')->constrained('manufacturers');
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
        Schema::dropIfExists('hardwares');
    }
};
