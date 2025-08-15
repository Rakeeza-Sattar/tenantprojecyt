<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view-tenants', ['only' => ['index', 'show']]);
        $this->middleware('permission:create-tenants', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-tenants', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-tenants', ['only' => ['destroy']]);
    }

    public function index()
    {
        $tenants = Tenant::paginate(10);
        return view('tenants.index', compact('tenants'));
    }

    public function create()
    {
        return view('tenants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'business_name' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'nts_cnic' => 'required|string|max:255',
            'address' => 'required|string',
            'business_type' => 'required|string|max:255',
            'business_sector' => 'required|string|max:255',
            'business_city' => 'required|string|max:255',
        ]);

        Tenant::create($request->all());

        return redirect()->route('tenants.index')->with('success', 'Tenant created successfully');
    }

    public function show(Tenant $tenant)
    {
        return view('tenants.show', compact('tenant'));
    }

    public function edit(Tenant $tenant)
    {
        return view('tenants.edit', compact('tenant'));
    }

    public function update(Request $request, Tenant $tenant)
    {
        $request->validate([
            'business_name' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'nts_cnic' => 'required|string|max:255',
            'address' => 'required|string',
            'business_type' => 'required|string|max:255',
            'business_sector' => 'required|string|max:255',
            'business_city' => 'required|string|max:255',
        ]);

        $tenant->update($request->all());

        return redirect()->route('tenants.index')->with('success', 'Tenant updated successfully');
    }

    public function destroy(Tenant $tenant)
    {
        $tenant->delete();
        return redirect()->route('tenants.index')->with('success', 'Tenant deleted successfully');
    }
}
