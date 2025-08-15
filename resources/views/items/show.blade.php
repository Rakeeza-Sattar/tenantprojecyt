
@extends('layouts.app')

@section('title', 'Item Details')

@section('content')
<div class="bg-white rounded-lg shadow-sm border border-gray-200">
    <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
        <h3 class="text-lg font-semibold text-gray-900">Item Details</h3>
        <div class="flex space-x-2">
            @can('edit-items')
            <a href="{{ route('items.edit', $item) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">Edit</a>
            @endcan
            <a href="{{ route('items.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">Back to List</a>
        </div>
    </div>
    
    <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-500">HS Code</label>
                <p class="mt-1 text-sm text-gray-900">{{ $item->hs_code }}</p>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-500">Rate</label>
                <p class="mt-1 text-sm text-gray-900">{{ $item->rate }}</p>
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-500">Product Description</label>
                <p class="mt-1 text-sm text-gray-900">{{ $item->product_description }}</p>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-500">UOM</label>
                <p class="mt-1 text-sm text-gray-900">{{ $item->uom }}</p>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-500">Value Sales Excluding ST</label>
                <p class="mt-1 text-sm text-gray-900">{{ number_format($item->value_sales_excluding_st, 2) }}</p>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-500">Fixed Notified Value or Retail Price</label>
                <p class="mt-1 text-sm text-gray-900">{{ number_format($item->fixed_notified_value_or_retail_price, 2) }}</p>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-500">Sales Tax Applicable</label>
                <p class="mt-1 text-sm text-gray-900">{{ number_format($item->sales_tax_applicable, 2) }}</p>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-500">Sales Tax Withheld at Source</label>
                <p class="mt-1 text-sm text-gray-900">{{ number_format($item->sales_tax_withheld_at_source, 2) }}</p>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-500">Extra Tax</label>
                <p class="mt-1 text-sm text-gray-900">{{ $item->extra_tax ?: 'N/A' }}</p>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-500">Further Tax</label>
                <p class="mt-1 text-sm text-gray-900">{{ number_format($item->further_tax, 2) }}</p>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-500">SRO Schedule No</label>
                <p class="mt-1 text-sm text-gray-900">{{ $item->sro_schedule_no ?: 'N/A' }}</p>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-500">FED Payable</label>
                <p class="mt-1 text-sm text-gray-900">{{ number_format($item->fed_payable, 2) }}</p>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-500">SRO Item Serial No</label>
                <p class="mt-1 text-sm text-gray-900">{{ $item->sro_item_serial_no ?: 'N/A' }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
