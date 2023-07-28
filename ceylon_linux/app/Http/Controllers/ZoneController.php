<?php



namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ZoneController extends Controller
{
    function AddZone(Request $req)
    {
        try {
            $zone = new Zone();
            $zone->zone_code = $req->zoneCode;
            $zone->zone_long_description = $req->zlDescription;
            $zone->short_description = $req->shortDescription;
            $zone->save();

            Log::info('Data saved successfully: ' . json_encode($zone->toArray()));
        } catch (\Exception $e) {
            Log::error('Error saving data: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error occurred while saving data.');
        }
    }
}
