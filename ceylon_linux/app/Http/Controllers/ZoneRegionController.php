<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ZoneRegionController extends Controller
{
    public function getZoneAndRegionForTerritory(Request $request)
    {

        $allZones = Zone::pluck('zone_long_description', 'zone_code');
        $relatedRegions = Region::pluck('region_name', 'region_code');

        // $selectedZone = $request->input('zone');
        // Log::info('Selected Zone:' . $selectedZone);
        // $relatedRegions = DB::table('region')
        //     ->where('zone_code_pk', $selectedZone)
        //     ->pluck('region_name', 'region_code');
        // Log::info('Related Regions:' . json_encode($relatedRegions));

        //return response()->json($relatedRegions);
        return view('admin-territory', compact('allZones', 'relatedRegions'));
    }
}
