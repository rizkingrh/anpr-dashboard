<?php

namespace App\Http\Controllers;

use App\History;
use App\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('history');
    }

    /**
     * DataTables server-side processing
     */
    public function datatables(Request $request)
    {
        if ($request->ajax()) {
            $query = History::orderBy('created_at', 'desc');
            
            $totalRecords = $query->count();
            
            // Handle search
            if ($request->has('search') && !empty($request->search['value'])) {
                $searchValue = $request->search['value'];
                $query->where(function($q) use ($searchValue) {
                    $q->where('number_plate', 'like', "%{$searchValue}%")
                      ->orWhere('vehicle_type', 'like', "%{$searchValue}%")
                      ->orWhere('tenant', 'like', "%{$searchValue}%");
                });
            }
            
            $totalFiltered = $query->count();
            
            // Handle ordering
            if ($request->has('order')) {
                $orderColumn = $request->order[0]['column'];
                $orderDirection = $request->order[0]['dir'];
                
                $columns = ['id', 'vehicle_type', 'vehicle_image', 'number_plate', 'plate_image', 'tenant', 'created_at', 'actions'];
                if (isset($columns[$orderColumn]) && !in_array($columns[$orderColumn], ['vehicle_image', 'plate_image', 'actions'])) {
                    $query->orderBy($columns[$orderColumn], $orderDirection);
                }
            }
            
            // Handle pagination
            $start = $request->get('start', 0);
            $length = $request->get('length', 10);
            
            $data = $query->skip($start)->take($length)->get();
            
            // Format data for DataTables
            $formattedData = [];
            foreach ($data as $index => $item) {
                $editButton = '<button type="button" class="btn btn-primary" onclick="editHistory(' . $item->id . ', \'' . strtoupper($item->vehicle_type) . '\', \'' . $item->number_plate . '\')" title="Edit">
                                <i class="fas fa-pen-to-square fa-sm"></i>
                              </button>';
                
                $deleteButton = '';
                if (Gate::allows('admin')) {
                    $deleteButton = '<form id="delete-form-' . $item->id . '" action="' . route('history.destroy', $item->id) . '" method="post" style="display:inline;">
                                      ' . csrf_field() . '
                                      ' . method_field('DELETE') . '
                                      <button type="button" class="btn btn-danger" onclick="confirmDelete(' . $item->id . ')">
                                        <i class="fas fa-trash-can fa-sm"></i>
                                      </button>
                                    </form>';
                }
                
                $actions = '<div class="d-flex gap-2">' . $editButton . $deleteButton . '</div>';
                
                $vehicleImage = $item->vehicle_image 
                    ? '<a href="' . asset('storage/' . $item->vehicle_image) . '" data-lity>
                        <img src="' . asset('storage/' . $item->vehicle_image) . '" alt="Vehicle" style="height:35px;">
                       </a>' 
                    : '-';
                
                $plateImage = $item->plate_image 
                    ? '<a href="' . asset('storage/' . $item->plate_image) . '" data-lity>
                        <img src="' . asset('storage/' . $item->plate_image) . '" alt="Plate" style="height:35px;">
                       </a>' 
                    : '-';
                
                $status = $item->tenant == 'yes' 
                    ? '<span class="badge bg-success rounded-pill">Tenant</span>'
                    : '<span class="badge bg-danger rounded-pill">Non Tenant</span>';
                
                $formattedData[] = [
                    $start + $index + 1,
                    strtoupper($item->vehicle_type),
                    $vehicleImage,
                    $item->number_plate,
                    $plateImage,
                    $status,
                    $item->created_at->format('d-m-Y H:i:s'),
                    $actions
                ];
            }
            
            return response()->json([
                'draw' => intval($request->get('draw')),
                'recordsTotal' => $totalRecords,
                'recordsFiltered' => $totalFiltered,
                'data' => $formattedData
            ]);
        }
        
        return response()->json(['error' => 'Invalid request'], 400);
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
            'vehicle_type' => 'required|string|max:25',
            'number_plate' => 'required|string|max:25',
        ]);

        $tenant = Tenant::where('vehicle_plate', $request->number_plate)->first();

        $history->vehicle_type = strtoupper($request->vehicle_type);
        $history->number_plate = strtoupper($request->number_plate);
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

        // Delete vehicle image
        if ($history->vehicle_image) {
            $vehiclePath = storage_path('app/public/' . $history->vehicle_image);
            if (file_exists($vehiclePath)) {
                unlink($vehiclePath);
            }
        }
        
        // Delete plate image
        if ($history->plate_image) {
            $platePath = storage_path('app/public/' . $history->plate_image);
            if (file_exists($platePath)) {
                unlink($platePath);
            }
        }

        $history->delete();
        return redirect()->route('history.index')->with('success', 'Data berhasil dihapus!');
    }
}
