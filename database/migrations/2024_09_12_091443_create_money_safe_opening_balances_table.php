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
        Schema::create('money_safe_opening_balances', function (Blueprint $table) {
            $table->id();
            $table->double('balance');
            $table->bigInteger('branch_id')->unsigned();
            $table->bigInteger('money_safe_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('money_safe_opening_balances');
    }
};
