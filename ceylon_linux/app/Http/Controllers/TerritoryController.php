<?php

namespace App\Http\Controllers;

use App\Models\Territory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TerritoryController extends Controller
{
    public function showAdminTerritory()
    {
        $currentDateTime = Carbon::now();
        $currentDateTimeFormatted = $currentDateTime->format('l, jS F Y g.iA');
        return view('admin-territory', compact('currentDateTimeFormatted'));
    }

    public function AddTerritory(Request $req)
    {
        try {
            $territory = new Territory();
            $territory->zone = $req->zoneSelection;
            $territory->region = $req->regionSelection;
            $territory->territory_code = $req->territory_code;
            $territory->territory_name = $req->territory_name;
            $territory->save();

            Log::info('Data saved successfully: ' . json_encode($territory->toArray()));
        } catch (\Exception $e) {
            Log::error('Error saving data: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error occurred while saving data.');
        }
    }
}
