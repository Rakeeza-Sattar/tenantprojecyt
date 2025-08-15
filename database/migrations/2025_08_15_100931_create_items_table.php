<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('hs_code');
            $table->text('product_description');
            $table->string('rate');
            $table->string('uom');
            $table->decimal('value_sales_excluding_st', 15, 2)->default(0);
            $table->decimal('fixed_notified_value_or_retail_price', 15, 2)->default(0);
            $table->decimal('sales_tax_applicable', 15, 2)->default(0);
            $table->decimal('sales_tax_withheld_at_source', 15, 2)->default(0);
            $table->string('extra_tax')->nullable();
            $table->decimal('further_tax', 15, 2)->default(0);
            $table->string('sro_schedule_no')->nullable();
            $table->decimal('fed_payable', 15, 2)->default(0);
            $table->string('sro_item_serial_no')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};