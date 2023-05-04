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
        Schema::create('fiber_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fiber_id')->unsigned()->nullable()->constrained('fibers');
            $table->string('locale')->index();
            $table->string('name');
            $table->text('description');
            $table->unique(['fiber_id', 'locale'], 'fiber_id');
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
        Schema::dropIfExists('fiber_translations');
    }
};
