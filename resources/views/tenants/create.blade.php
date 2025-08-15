@extends('layouts.app')

@section('title', 'Create Tenant')
@section('page-title', 'Create New Tenant')
@section('page-description', 'Add a new tenant to the system')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900">Tenant Information</h3>
        </div>
        
        <form action="{{ route('tenants.store') }}" method="POST" class="p-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="business_name" class="block text-sm font-medium text-gray-700 mb-2">Business Name</label>
                    <input type="text" name="business_name" id="business_name" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
                           value="{{ old('business_name') }}" required>
                </div>
                
                <div>
                    <label for="province" class="block text-sm font-medium text-gray-700 mb-2">Province</label>
                    <input type="text" name="province" id="province" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
                           value="{{ old('province') }}" required>
                </div>
                
                <div>
                    <label for="nts_cnic" class="block text-sm font-medium text-gray-700 mb-2">NTS/CNIC</label>
                    <input type="text" name="nts_cnic" id="nts_cnic" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
                           value="{{ old('nts_cnic') }}" required>
                </div>
                
                <div>
                    <label for="business_type" class="block text-sm font-medium text-gray-700 mb-2">Business Type</label>
                    <input type="text" name="business_type" id="business_type" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
                           value="{{ old('business_type') }}" required>
                </div>
                
                <div>
                    <label for="business_sector" class="block text-sm font-medium text-gray-700 mb-2">Business Sector</label>
                    <input type="text" name="business_sector" id="business_sector" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
                           value="{{ old('business_sector') }}" required>
                </div>
                
                <div>
                    <label for="business_city" class="block text-sm font-medium text-gray-700 mb-2">Business City</label>
                    <input type="text" name="business_city" id="business_city" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
                           value="{{ old('business_city') }}" required>
                </div>
            </div>
            
            <div class="mt-6">
                <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                <textarea name="address" id="address" rows="3" 
                          class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
                          required>{{ old('address') }}</textarea>
            </div>
            
            <div class="mt-6 flex justify-end space-x-3">
                <a href="{{ route('tenants.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-md text-sm font-medium transition-colors">
                    Cancel
                </a>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                    Create Tenant
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
