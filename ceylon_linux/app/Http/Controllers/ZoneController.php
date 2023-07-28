<?php



namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;


class ZoneController extends Controller
{
    public function showAdminZone()
    {
        $currentDateTime = Carbon::now();
        $currentDateTimeFormatted = $currentDateTime->format('l, jS F Y g.iA');
        return view('admin-zone', compact('currentDateTimeFormatted'));
    }


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
