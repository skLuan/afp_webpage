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
        Schema::create('physical_property_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('physical_property_id')->unsigned()->nullable()->constrained('physical_properties');
            $table->string('locale')->index();
            $table->string('name');
            $table->unique(['property_id', 'locale'], 'property_id');
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
        Schema::dropIfExists('physical_properties_translations');
    }
};
