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
        Schema::create('referentiels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->references('id')->on("types");
            $table->tinyInteger("Validated")->default('0')->comment('0=Visible, 1=cacher');
            $table->time("horaire");
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
        Schema::dropIfExists('referentiels');
    }
};
