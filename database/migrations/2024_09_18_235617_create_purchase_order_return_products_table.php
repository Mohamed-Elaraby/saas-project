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
        Schema::create('purchase_order_return_products', function (Blueprint $table) {
            $table->id();
            $table->string('item_code');
            $table->string('item_name');
            $table->integer('item_quantity');
            $table->double('item_price');
            $table->double('item_amount_taxable');
            $table->double('item_discount')->nullable();
            $table->tinyInteger('item_discount_type') ->comment('0=> currency, 1=> percentage')->nullable();
            $table->double('item_discount_amount') ->nullable();
            $table->double('item_sub_total_after_discount') ->nullable();
            $table->double('item_tax_amount');
            $table->double('item_sub_total');
            $table->bigInteger('purchase_order_return_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_order_return_products');
    }
};
