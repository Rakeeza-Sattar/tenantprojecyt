<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view-items', ['only' => ['index', 'show']]);
        $this->middleware('permission:create-items', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-items', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-items', ['only' => ['destroy']]);
    }

    public function index()
    {
        $items = Item::paginate(10);
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'hs_code' => 'required|string|max:255',
            'product_description' => 'required|string',
            'rate' => 'required|string|max:255',
            'uom' => 'required|string|max:255',
            'value_sales_excluding_st' => 'nullable|numeric',
            'fixed_notified_value_or_retail_price' => 'nullable|numeric',
            'sales_tax_applicable' => 'nullable|numeric',
            'sales_tax_withheld_at_source' => 'nullable|numeric',
            'extra_tax' => 'nullable|string',
            'further_tax' => 'nullable|numeric',
            'sro_schedule_no' => 'nullable|string',
            'fed_payable' => 'nullable|numeric',
            'sro_item_serial_no' => 'nullable|string',
        ]);

        Item::create($request->all());

        return redirect()->route('items.index')->with('success', 'Item created successfully');
    }

    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $request->validate([
            'hs_code' => 'required|string|max:255',
            'product_description' => 'required|string',
            'rate' => 'required|string|max:255',
            'uom' => 'required|string|max:255',
            'value_sales_excluding_st' => 'nullable|numeric',
            'fixed_notified_value_or_retail_price' => 'nullable|numeric',
            'sales_tax_applicable' => 'nullable|numeric',
            'sales_tax_withheld_at_source' => 'nullable|numeric',
            'extra_tax' => 'nullable|string',
            'further_tax' => 'nullable|numeric',
            'sro_schedule_no' => 'nullable|string',
            'fed_payable' => 'nullable|numeric',
            'sro_item_serial_no' => 'nullable|string',
        ]);

        $item->update($request->all());

        return redirect()->route('items.index')->with('success', 'Item updated successfully');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')->with('success', 'Item deleted successfully');
    }
}