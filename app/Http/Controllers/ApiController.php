<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'numberplate' => 'required|string',
            'image' => 'required|string',
        ]);

        try {
            $hasil = new History();
            $hasil->numberplate = $request->input('numberplate');
            $hasil->image = $request->input('image');
            $hasil->save();

            return response()->json([
                'message' => 'Gambar berhasil disimpan!', 
                'id' => $hasil->id], 
                201);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Gagal menyimpan gambar.',
                'error' => $e->getMessage()],
                500);
        }
    }
    
    public function getData()
    {
        try {
            $data = History::orderBy('created_at', 'desc')->paginate(50);

            if ($data->isEmpty()) {
                return response()->json([
                    'message' => 'Tidak ada data histori ANPR yang ditemukan.'
                ], 200);
            }

            return response()->json([
                'message' => 'Data histori ANPR berhasil diambil.',
                'data' => $data
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Gagal mengambil data histori.', 
                'error' => $e->getMessage()
            ], 500);
        }

        

    }
}
