
@extends('layouts.app')

@section('title', 'Tenant Details')

@section('content')
<div class="bg-white rounded-lg shadow-sm border border-gray-200">
    <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
        <h3 class="text-lg font-semibold text-gray-900">Tenant Details</h3>
        <div class="flex space-x-2">
            @can('edit-tenants')
            <a href="{{ route('tenants.edit', $tenant) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">Edit</a>
            @endcan
            <a href="{{ route('tenants.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">Back to List</a>
        </div>
    </div>
    
    <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-500">Business Name</label>
                <p class="mt-1 text-sm text-gray-900">{{ $tenant->business_name }}</p>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-500">Province</label>
                <p class="mt-1 text-sm text-gray-900">{{ $tenant->province }}</p>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-500">NTS/CNIC</label>
                <p class="mt-1 text-sm text-gray-900">{{ $tenant->nts_cnic }}</p>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-500">Business Type</label>
                <p class="mt-1 text-sm text-gray-900">{{ $tenant->business_type }}</p>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-500">Business Sector</label>
                <p class="mt-1 text-sm text-gray-900">{{ $tenant->business_sector }}</p>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-500">Business City</label>
                <p class="mt-1 text-sm text-gray-900">{{ $tenant->business_city }}</p>
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-500">Address</label>
                <p class="mt-1 text-sm text-gray-900">{{ $tenant->address }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
