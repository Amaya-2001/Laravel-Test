<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class RegionController extends Controller
{
    public function showAdminRegion()
    {
        $currentDateTime = Carbon::now();
        $currentDateTimeFormatted = $currentDateTime->format('l, jS F Y g.iA');
        return view('admin-region', compact('currentDateTimeFormatted'));
    }

    public function AddRegion(Request $req)
    {
        try {
            $region = new Region();
            $region->zone = $req->zone;
            $region->region_code = $req->region_code;
            $region->region_name = $req->region_name;
            $region->save();

            Log::info('Data saved successfully: ' . json_encode($region->toArray()));
        } catch (\Exception $e) {
            Log::error('Error saving data: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error occurred while saving data.');
        }
    }
}
