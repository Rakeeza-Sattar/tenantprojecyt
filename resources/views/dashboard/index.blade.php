<!-- resources/views/dashboard/index.blade.php -->
@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('page-description', 'Overview of your system statistics')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Tenants Card -->
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
            </div>
            <div class="ml-4">
                <p class="text-sm font-medium text-gray-600">Total Tenants</p>
                <p class="text-2xl font-semibold text-gray-900">{{ $stats['tenants'] }}</p>
            </div>
        </div>
        @can('view-tenants')
        <div class="mt-4">
            <a href="{{ route('tenants.index') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                View All Tenants →
            </a>
        </div>
        @endcan
    </div>

    <!-- Customers Card -->
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-green-100 text-green-600">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                </svg>
            </div>
            <div class="ml-4">
                <p class="text-sm font-medium text-gray-600">Total Customers</p>
                <p class="text-2xl font-semibold text-gray-900">{{ $stats['customers'] }}</p>
            </div>
        </div>
        @can('view-customers')
        <div class="mt-4">
            <a href="{{ route('customers.index') }}" class="text-green-600 hover:text-green-800 text-sm font-medium">
                View All Customers →
            </a>
        </div>
        @endcan
    </div>

    <!-- Items Card -->
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
            </div>
            <div class="ml-4">
                <p class="text-sm font-medium text-gray-600">Total Items</p>
                <p class="text-2xl font-semibold text-gray-900">{{ $stats['items'] }}</p>
            </div>
        </div>
        @can('view-items')
        <div class="mt-4">
            <a href="{{ route('items.index') }}" class="text-purple-600 hover:text-purple-800 text-sm font-medium">
                View All Items →
            </a>
        </div>
        @endcan
    </div>

    <!-- Users Card -->
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-orange-100 text-orange-600">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                </svg>
            </div>
            <div class="ml-4">
                <p class="text-sm font-medium text-gray-600">Total Users</p>
                <p class="text-2xl font-semibold text-gray-900">{{ $stats['users'] }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity Section -->
<div class="bg-white rounded-lg shadow-sm border border-gray-200">
    <div class="px-6 py-4 border-b border-gray-200">
        <h3 class="text-lg font-semibold text-gray-900">Quick Actions</h3>
    </div>
    <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @can('create-tenants')
            <a href="{{ route('tenants.create') }}" class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                <div class="p-2 bg-blue-100 rounded-full text-blue-600 mr-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                </div>
                <div>
                    <p class="font-medium text-gray-900">Add New Tenant</p>
                    <p class="text-sm text-gray-600">Create a new tenant record</p>
                </div>
            </a>
            @endcan

            @can('create-customers')
            <a href="{{ route('customers.create') }}" class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                <div class="p-2 bg-green-100 rounded-full text-green-600 mr-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                </div>
                <div>
                    <p class="font-medium text-gray-900">Add New Customer</p>
                    <p class="text-sm text-gray-600">Create a new customer record</p>
                </div>
            </a>
            @endcan

            @can('create-items')
            <a href="{{ route('items.create') }}" class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                <div class="p-2 bg-purple-100 rounded-full text-purple-600 mr-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                </div>
                <div>
                    <p class="font-medium text-gray-900">Add New Item</p>
                    <p class="text-sm text-gray-600">Create a new item record</p>
                </div>
            </a>
            @endcan
        </div>
    </div>
</div>
@endsection