@extends('layouts.app')

@section('title', 'Tenants')
@section('page-title', 'Tenants')
@section('page-description', 'Manage your tenant records')

@section('content')
<div class="bg-white rounded-lg shadow-sm border border-gray-200">
    <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
        <h3 class="text-lg font-semibold text-gray-900">All Tenants</h3>
        @can('create-tenants')
        <a href="{{ route('tenants.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
            Add New Tenant
        </a>
        @endcan
    </div>
    
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Business Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Province</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Business Type</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">City</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($tenants as $tenant)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">{{ $tenant->business_name }}</div>
                        <div class="text-sm text-gray-500">{{ $tenant->nts_cnic }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $tenant->province }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $tenant->business_type }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $tenant->business_city }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <a href="{{ route('tenants.show', $tenant) }}" class="text-blue-600 hover:text-blue-900">View</a>
                            @can('edit-tenants')
                            <a href="{{ route('tenants.edit', $tenant) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            @endcan
                            @can('delete-tenants')
                            <form action="{{ route('tenants.destroy', $tenant) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                            @endcan
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">No tenants found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <div class="px-6 py-4 border-t border-gray-200">
        {{ $tenants->links() }}
    </div>
</div>
@endsection