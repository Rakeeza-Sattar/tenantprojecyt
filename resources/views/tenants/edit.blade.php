
@extends('layouts.app')

@section('title', 'Edit Tenant')

@section('content')
<div class="bg-white rounded-lg shadow-sm border border-gray-200">
    <div class="px-6 py-4 border-b border-gray-200">
        <h3 class="text-lg font-semibold text-gray-900">Edit Tenant</h3>
    </div>
    
    <form action="{{ route('tenants.update', $tenant) }}" method="POST" class="p-6">
        @csrf
        @method('PUT')
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="business_name" class="block text-sm font-medium text-gray-700 mb-2">Business Name</label>
                <input type="text" name="business_name" id="business_name" value="{{ old('business_name', $tenant->business_name) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                @error('business_name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="province" class="block text-sm font-medium text-gray-700 mb-2">Province</label>
                <input type="text" name="province" id="province" value="{{ old('province', $tenant->province) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                @error('province')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="nts_cnic" class="block text-sm font-medium text-gray-700 mb-2">NTS/CNIC</label>
                <input type="text" name="nts_cnic" id="nts_cnic" value="{{ old('nts_cnic', $tenant->nts_cnic) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                @error('nts_cnic')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="business_type" class="block text-sm font-medium text-gray-700 mb-2">Business Type</label>
                <input type="text" name="business_type" id="business_type" value="{{ old('business_type', $tenant->business_type) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                @error('business_type')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="business_sector" class="block text-sm font-medium text-gray-700 mb-2">Business Sector</label>
                <input type="text" name="business_sector" id="business_sector" value="{{ old('business_sector', $tenant->business_sector) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                @error('business_sector')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="business_city" class="block text-sm font-medium text-gray-700 mb-2">Business City</label>
                <input type="text" name="business_city" id="business_city" value="{{ old('business_city', $tenant->business_city) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                @error('business_city')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="md:col-span-2">
                <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                <textarea name="address" id="address" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>{{ old('address', $tenant->address) }}</textarea>
                @error('address')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
        
        <div class="mt-6 flex justify-end space-x-3">
            <a href="{{ route('tenants.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Cancel</a>
            <button type="submit" class="px-4 py-2 bg-blue-600 border border-transparent rounded-md text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Update Tenant</button>
        </div>
    </form>
</div>
@endsection
