<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\Customer;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'tenants' => Tenant::count(),
            'customers' => Customer::count(),
            'items' => Item::count(),
            'users' => User::count(),
        ];

        return view('dashboard.index', compact('stats'));
    }
}
