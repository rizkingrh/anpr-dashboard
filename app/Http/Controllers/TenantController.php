<?php

namespace App\Http\Controllers;

use App\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tenant::all();
        return view('tenant', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tenant-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_plate' => 'required|string',
            'vehicle_type' => 'required|string',
            'brand' => 'required|string',
            'color' => 'required|string',
        ]);

        Tenant::create([
            'vehicle_plate' => $request->vehicle_plate,
            'vehicle_type' => $request->vehicle_type,
            'brand' => $request->brand,
            'color' => $request->color,
        ]);

        return redirect()->route('tenant.index')->with('success', 'Tenant berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tenant $tenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tenant $tenant)
    {
        return view('tenant-edit', compact('tenant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'vehicle_plate' => 'required|string',
            'vehicle_type' => 'required|string',
            'brand' => 'required|string',
            'color' => 'required|string',
        ]);

        Tenant::where('id', $id)->update($data);
        return redirect()->route('tenant.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tenant $tenant)
    {
        $tenant->delete();
        return redirect()->route('tenant.index')->with('success', 'Data berhasil dihapus!');
    }
}
