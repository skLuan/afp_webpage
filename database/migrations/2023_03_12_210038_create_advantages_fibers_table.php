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
        Schema::create('advantages_fibers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('advantage_id')->constrained('advantages', 'id');
            $table->foreignId('fiber_id')->constrained('fibers');
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
        Schema::dropIfExists('advantages_fibers');
    }
};
