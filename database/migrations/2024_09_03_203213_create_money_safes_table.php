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
        Schema::create('money_safes', function (Blueprint $table) {
            $table->id();
            $table->double('amount_paid');
            $table->double('final_amount');
            $table->text('notes')->nullable();
            $table->enum('process_type', ['withDraw', 'deposit'])->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('sale_order_id')->unsigned()->nullable();
            $table->bigInteger('client_payment_id')->unsigned()->nullable();
            $table->bigInteger('client_collecting_id')->unsigned()->nullable();
            $table->bigInteger('expenses_id')->unsigned()->nullable();
            $table->bigInteger('purchase_order_id')->unsigned()->nullable();
            $table->bigInteger('supplier_payment_id')->unsigned()->nullable();
            $table->bigInteger('supplier_collecting_id')->unsigned()->nullable();
            $table->bigInteger('sale_order_return_id')->unsigned()->nullable();
            $table->bigInteger('purchase_order_return_id')->unsigned()->nullable();
            $table->bigInteger('salary_id')->unsigned()->nullable();
            $table->bigInteger('advance_id')->unsigned()->nullable();
            $table->bigInteger('scheduled_advance_id')->unsigned()->nullable();
            $table->bigInteger('reward_id')->unsigned()->nullable();
            $table->bigInteger('vacation_id')->unsigned()->nullable();
            $table->bigInteger('discount_id')->unsigned()->nullable();
            $table->bigInteger('employee_salary_log_id')->unsigned()->nullable();
            $table->bigInteger('branch_id')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('money_safes');
    }
};
