<?php

namespace App\Http\Controllers;

use App\History;
use App\Tenant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_type' => 'required|string|max:25',
            'vehicle_image' => 'required|image',
            'number_plate' => 'required|string|max:25',
            'plate_image' => 'required|image',
        ]);

        try {
            $vehicleImagePath = $request->file('vehicle_image')->store('vehicles', 'public');
            $plateImagePath = $request->file('plate_image')->store('plates', 'public');

            $tenant = Tenant::where('vehicle_plate', $request->input('number_plate'))->first();

            $data = [
                'vehicle_type' => $request->input('vehicle_type'),
                'vehicle_image' => $vehicleImagePath,
                'number_plate' => $request->input('number_plate'),
                'plate_image' => $plateImagePath,
                'tenant' => $tenant ? 'yes' : 'no',
            ];

            History::create($data);

            return response()->json([
                'message' => 'Data berhasil disimpan!',
                'data' => $data],
                201);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Gagal menyimpan data.',
                'error' => $e->getMessage()],
                500);
        }
    }
    
    public function getData(Request $request)
    {
        try {
            $query = History::orderBy('created_at', 'desc');

            // Filter
            if ($request->has('month') && $request->has('year')) {
                $month = $request->get('month');
                $year = $request->get('year');
                
                // Validate
                if ($month < 1 || $month > 12) {
                    return response()->json([
                        'message' => 'Bulan harus antara 1-12.'
                    ], 400);
                }
                
                if ($year < 1900 || $year > date('Y')) {
                    return response()->json([
                        'message' => 'Tahun tidak valid.'
                    ], 400);
                }

                $filterInfo = [
                    'month'=>(int)$month,
                    'year'=>(int)$year,
                ];
                
                $query->whereMonth('created_at', $month)
                      ->whereYear('created_at', $year);
            }
            // Filter by month only (current year)
            elseif ($request->has('month')) {
                $month = $request->get('month');
                
                if ($month < 1 || $month > 12) {
                    return response()->json([
                        'message' => 'Bulan harus antara 1-12.'
                    ], 400);
                }

                $filterInfo = [
                    'month'=>(int)$month,
                    'year'=>date('Y'),
                ];
                
                $query->whereMonth('created_at', $month)
                      ->whereYear('created_at', date('Y'));
            }

            $data = $query->get();
            $filterInfo = $filterInfo ?? ['Data tanpa filter'];

            if ($data->isEmpty()) {
                return response()->json([
                    'message' => 'Tidak ada data histori ANPR yang ditemukan'
                ], 200);
            }

            return response()->json([
                'message' => 'Data histori ANPR berhasil diambil.',
                'filter' => $filterInfo,
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
