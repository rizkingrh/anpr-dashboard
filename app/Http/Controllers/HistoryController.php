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
        return view('dashboard', compact('data', 'totalData'));
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
    public function update(Request $request, History $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $history = History::findOrFail($id); // Mencari data, jika tidak ada akan error 404
        $history->delete(); // Menghapus data
    
        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus!');
        // History::where('id', $id)->delete();
        // return redirect('dashboard')->with('success', 'Data berhasil di hapus!');
    }
}
