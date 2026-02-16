<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('chassis_number');
            $table->string('plate_number');
            $table->string('car_color');
            $table->bigInteger('client_id')->unsigned();
            $table->bigInteger('car_type_id')->unsigned();
            $table->bigInteger('car_size_id') ->unsigned();
            $table->bigInteger('car_model_id') ->unsigned() ->nullable();
            $table->bigInteger('car_engine_id') ->unsigned() ->nullable();
            $table->bigInteger('car_development_code_id') ->unsigned() ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
