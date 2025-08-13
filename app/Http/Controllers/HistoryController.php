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
                    $q->where('numberplate', 'like', "%{$searchValue}%")
                      ->orWhere('tenant', 'like', "%{$searchValue}%");
                });
            }
            
            $totalFiltered = $query->count();
            
            // Handle ordering
            if ($request->has('order')) {
                $orderColumn = $request->order[0]['column'];
                $orderDirection = $request->order[0]['dir'];
                
                $columns = ['id', 'numberplate', 'image', 'tenant', 'created_at', 'actions'];
                if (isset($columns[$orderColumn]) && $columns[$orderColumn] !== 'image' && $columns[$orderColumn] !== 'actions') {
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
                $editButton = '<button type="button" class="btn btn-primary" onclick="editNumberPlate(' . $item->id . ', \'' . $item->numberplate . '\')">
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
                
                $image = '<a href="data:image/jpeg;base64,' . $item->image . '" data-lity>
                           <img src="data:image/jpeg;base64,' . $item->image . '" alt="Plate Number" style="height:35px;">
                          </a>';
                
                $status = $item->tenant == 'yes' 
                    ? '<span class="badge bg-success rounded-pill">Tenant</span>'
                    : '<span class="badge bg-danger rounded-pill">Non Tenant</span>';
                
                $formattedData[] = [
                    $start + $index + 1,
                    $item->numberplate,
                    $image,
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
