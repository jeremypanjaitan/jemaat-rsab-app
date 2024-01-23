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
        Schema::create('persembahans', function (Blueprint $table) {
            $table->id();
            $table->integer('seratus');
            $table->integer('limaRatus');
            $table->integer('seribu');
            $table->integer('duaRibu');
            $table->integer('limaRibu');
            $table->integer('sepuluhRibu');
            $table->integer('duaPuluhRibu');
            $table->integer('limaPuluhRibu');
            $table->integer('seratusRibu');
            $table->integer('total');
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
        Schema::dropIfExists('persembahans');
    }
};
