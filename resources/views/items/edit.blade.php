
@extends('layouts.app')

@section('title', 'Edit Item')

@section('content')
<div class="bg-white rounded-lg shadow-sm border border-gray-200">
    <div class="px-6 py-4 border-b border-gray-200">
        <h3 class="text-lg font-semibold text-gray-900">Edit Item</h3>
    </div>
    
    <form action="{{ route('items.update', $item) }}" method="POST" class="p-6">
        @csrf
        @method('PUT')
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="hs_code" class="block text-sm font-medium text-gray-700 mb-2">HS Code</label>
                <input type="text" name="hs_code" id="hs_code" value="{{ old('hs_code', $item->hs_code) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                @error('hs_code')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="rate" class="block text-sm font-medium text-gray-700 mb-2">Rate</label>
                <input type="text" name="rate" id="rate" value="{{ old('rate', $item->rate) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                @error('rate')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="md:col-span-2">
                <label for="product_description" class="block text-sm font-medium text-gray-700 mb-2">Product Description</label>
                <textarea name="product_description" id="product_description" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>{{ old('product_description', $item->product_description) }}</textarea>
                @error('product_description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="uom" class="block text-sm font-medium text-gray-700 mb-2">UOM</label>
                <input type="text" name="uom" id="uom" value="{{ old('uom', $item->uom) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                @error('uom')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="value_sales_excluding_st" class="block text-sm font-medium text-gray-700 mb-2">Value Sales Excluding ST</label>
                <input type="number" step="0.01" name="value_sales_excluding_st" id="value_sales_excluding_st" value="{{ old('value_sales_excluding_st', $item->value_sales_excluding_st) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @error('value_sales_excluding_st')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="fixed_notified_value_or_retail_price" class="block text-sm font-medium text-gray-700 mb-2">Fixed Notified Value or Retail Price</label>
                <input type="number" step="0.01" name="fixed_notified_value_or_retail_price" id="fixed_notified_value_or_retail_price" value="{{ old('fixed_notified_value_or_retail_price', $item->fixed_notified_value_or_retail_price) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @error('fixed_notified_value_or_retail_price')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="sales_tax_applicable" class="block text-sm font-medium text-gray-700 mb-2">Sales Tax Applicable</label>
                <input type="number" step="0.01" name="sales_tax_applicable" id="sales_tax_applicable" value="{{ old('sales_tax_applicable', $item->sales_tax_applicable) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @error('sales_tax_applicable')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="sales_tax_withheld_at_source" class="block text-sm font-medium text-gray-700 mb-2">Sales Tax Withheld at Source</label>
                <input type="number" step="0.01" name="sales_tax_withheld_at_source" id="sales_tax_withheld_at_source" value="{{ old('sales_tax_withheld_at_source', $item->sales_tax_withheld_at_source) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @error('sales_tax_withheld_at_source')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="extra_tax" class="block text-sm font-medium text-gray-700 mb-2">Extra Tax</label>
                <input type="text" name="extra_tax" id="extra_tax" value="{{ old('extra_tax', $item->extra_tax) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @error('extra_tax')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="further_tax" class="block text-sm font-medium text-gray-700 mb-2">Further Tax</label>
                <input type="number" step="0.01" name="further_tax" id="further_tax" value="{{ old('further_tax', $item->further_tax) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @error('further_tax')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="sro_schedule_no" class="block text-sm font-medium text-gray-700 mb-2">SRO Schedule No</label>
                <input type="text" name="sro_schedule_no" id="sro_schedule_no" value="{{ old('sro_schedule_no', $item->sro_schedule_no) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @error('sro_schedule_no')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="fed_payable" class="block text-sm font-medium text-gray-700 mb-2">FED Payable</label>
                <input type="number" step="0.01" name="fed_payable" id="fed_payable" value="{{ old('fed_payable', $item->fed_payable) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @error('fed_payable')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="sro_item_serial_no" class="block text-sm font-medium text-gray-700 mb-2">SRO Item Serial No</label>
                <input type="text" name="sro_item_serial_no" id="sro_item_serial_no" value="{{ old('sro_item_serial_no', $item->sro_item_serial_no) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @error('sro_item_serial_no')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
        
        <div class="mt-6 flex justify-end space-x-3">
            <a href="{{ route('items.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Cancel</a>
            <button type="submit" class="px-4 py-2 bg-blue-600 border border-transparent rounded-md text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Update Item</button>
        </div>
    </form>
</div>
@endsection
