<?php

namespace App\Http\Controllers;

use App\History;
use App\Tenant;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = History::orderBy('created_at', 'desc')->get();
        return view('history', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    /* Versi tanpa base64
    $data = validator($request->all(), [
        'numberplate' => 'required|string|max:12',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    if ($data->fails()) {
        return response()->json(['error' => $data->errors()], 400);
    }

    // Simpan gambar ke storage
    $image = $request->file('image');
    $imageName = time() . '_' . $image->getClientOriginalName();
    $image->move(public_path('numberplates'), $imageName);

    // Simpan data ke database
    History::create([
        'numberplate' => $request->numberplate,
        'image' => 'numberplates/'. $imageName,
    ]);

    return response()->json(['status' => 'success', 'message' => 'Data saved successfully'], 201);
    */
    }

    /**
     * Display the specified resource.
     */
    public function show(History $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(History $history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $history = History::find($id);

        if (!$history) {
            return response()->json(['success' => false, 'message' => 'Data tidak ditemukan!'], 404);
        }

        $request->validate([
            'numberplate' => 'required|string|max:255'
        ]);

        $tenant = Tenant::where('vehicle_plate', $request->numberplate)->first();
        
        $history->numberplate = strtoupper($request->numberplate);
        $history->tenant = $tenant ? 'yes' : 'no';
        $history->save();

        return response()->json(['success' => true, 'message' => 'Data berhasil diperbarui!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(History $history)
    {
        if (!$history) {
            return redirect()->route('history.index')->with('error', 'Data tidak ditemukan!');
        }

        if ($history->image) {
            $imagePath = public_path($history->image);
            
            // Hapus gambar jika file benar-benar ada
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $history->delete();
        return redirect()->route('history.index')->with('success', 'Data berhasil dihapus!');
    }
}
