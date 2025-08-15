<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'hs_code',
        'product_description',
        'rate',
        'uom',
        'value_sales_excluding_st',
        'fixed_notified_value_or_retail_price',
        'sales_tax_applicable',
        'sales_tax_withheld_at_source',
        'extra_tax',
        'further_tax',
        'sro_schedule_no',
        'fed_payable',
        'sro_item_serial_no'
    ];

    protected $casts = [
        'value_sales_excluding_st' => 'decimal:2',
        'fixed_notified_value_or_retail_price' => 'decimal:2',
        'sales_tax_applicable' => 'decimal:2',
        'sales_tax_withheld_at_source' => 'decimal:2',
        'further_tax' => 'decimal:2',
        'fed_payable' => 'decimal:2'
    ];
}