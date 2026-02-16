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
        Schema::create('supplier_payments', function (Blueprint $table) {
            $table->id();
            $table->string('receipt_number')->nullable();
            $table->double('amount_paid')->nullable();
            $table->double('amount_paid_bank')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_method_bank')->nullable();
            $table->string('notes')->nullable();
            $table->string('payment_date');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('branch_id')->unsigned()->nullable();
            $table->bigInteger('supplier_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_payments');
    }
};
