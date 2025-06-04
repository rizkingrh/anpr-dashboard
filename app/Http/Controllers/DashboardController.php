<?php

namespace App\Http\Controllers;

use App\History;
use App\Tenant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $totalData = History::count();
        $totalTenant = Tenant::count();
        $tenantDetect = History::where('tenant', 'yes')->count();
        $nonTenantDetect = History::where('tenant', 'no')->count();

        // Check if it's an AJAX request with date parameters
        if ($request->has(['startDate', 'endDate'])) {
            // Get dates from AJAX request
            $activityDateStart = $request->input('startDate');
            $activityDateEnd = $request->input('endDate');

            
            // Validate dates
            try {
                Carbon::parse($activityDateStart);
                Carbon::parse($activityDateEnd);
            } catch (\Exception $e) {
                return response()->json(['error' => 'Invalid date format'], 400);
            }
        } else {
            // Default dates for initial page load
            $activityDateStart = "2025-05-01";
            $activityDateEnd = Carbon::now()->format('Y-m-d');
        }

        $activityTrend = DB::table('histories')
            ->selectRaw('DATE(created_at) as activity_date, COUNT(*) as total_entries')
            ->whereBetween('created_at', [
                    $activityDateStart . ' 00:00:00',
                    $activityDateEnd . ' 23:59:59'
                ])
            ->groupBy('activity_date')
            ->orderBy('activity_date', 'asc')
            ->get();

        $trendLabels = $activityTrend->pluck('activity_date')->map(function ($date) {
            return Carbon::parse($date)->isoFormat('D MMM');
        });
        $trendData = $activityTrend->pluck('total_entries');

        // Return JSON response for AJAX requests
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'trendLabels' => $trendLabels,
                'trendData' => $trendData,
                'startDate' => $activityDateStart,
                'endDate' => $activityDateEnd
            ]);
        }

        // Return view for regular page loads
        return view('dashboard', compact(
            'totalData',
            'totalTenant',
            'tenantDetect',
            'nonTenantDetect',
            'trendLabels',
            'trendData'
        ));
    }
}
