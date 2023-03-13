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
        Schema::create('table_values', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->timestamps();
            $table->foreignId('metric_system_id')->constrained('metric_systems');
            $table->foreignId('name_id')->constrained('physical_properties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_values');
    }
};
