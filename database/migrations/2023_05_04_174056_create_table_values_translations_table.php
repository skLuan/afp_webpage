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
        Schema::create('table_values_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('table_value_id')->unsigned()->nullable()->constrained('table_values');
            $table->string('locale')->index();
            $table->string('value');
            $table->unique(['table_value_id', 'locale'], 'table_value_id');
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
        Schema::dropIfExists('table_values_translations');
    }
};
