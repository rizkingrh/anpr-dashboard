<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = History::all();
        $totalData = History::count();
        return view('history', compact('data', 'totalData'));
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
        //
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

        $history->numberplate = strtoupper($request->numberplate);
        $history->save();

        return response()->json(['success' => true, 'message' => 'Data berhasil diperbarui!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $history = History::findOrFail($id); // Mencari data, jika tidak ada akan error 404

        if (!$history) {
            return redirect()->route('history.index')->with('error', 'Data tidak ditemukan!');
        }

        if ($history->image) {
            $imagePath = public_path($history->image); // Menggunakan public_path untuk mendapatkan lokasi di penyimpanan lokal
            
            // Hapus gambar jika file benar-benar ada
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $history->delete();
        return redirect()->route('history.index')->with('success', 'Data berhasil dihapus!');
    }
}
