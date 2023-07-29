<?php

namespace App\Http\Controllers;

use App\Models\Purchase_Distribution_Details;
use App\Models\Purchase_Order_Details;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderDistributionController extends Controller
{

    public function savePurchaseDistributionDetails(Request $req)
    {
        try {
            $purchaseDistribution = new Purchase_Distribution_Details();
            $purchaseDistribution->po_no = $req->po_no;
            $purchaseDistribution->zone = $req->zone;
            $purchaseDistribution->region = $req->region;
            $purchaseDistribution->territory = $req->territory;
            $purchaseDistribution->distributor = $req->distributor;
            $purchaseDistribution->remark = $req->remark;
            $purchaseDistribution->save();

            Log::info('Data saved successfully: ' . json_encode($purchaseDistribution->toArray()));
        } catch (\Exception $e) {
            Log::error('Error saving data: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error occurred while saving data.');
        }
    }

    //calculate order units price and save details
    public function calculateAndSaveOrderValue(Request $req)
    {
        try {
            $validatedData = $req->validate([
                'po_no' => 'required|string',
                'sku_code' => 'required|string',
                'sku_name' => 'required|string',
                'unit_price' => 'required|numeric',
                'avb_qty' => 'required|integer',
                'enter_qty' => 'required|integer',

            ]);
            $units = $validatedData['avb_qty'] + $validatedData['enter_qty'];
            $total_price = $units * $validatedData['unit_price'];

            $validatedData['units'] = $units;
            $validatedData['total_price'] = $total_price;

            $purchaseOrder = Purchase_Order_Details::create($validatedData);
            $purchaseOrder = Purchase_Order_Details::findOrFail($validatedData['po_no']);

            Log::info(' Data saved successfully: ' . json_encode($purchaseOrder->toArray()));
            return ['purchaseOrder' => $purchaseOrder, 'units' => $units, 'total_price' => $total_price];
        } catch (\Exception $e) {
            Log::error('Error saving data: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error occurred while saving data.');
        }
    }


    public function showPurchaseDistributionDate()
    {
        $currentDate = Carbon::now()->toDateString(); // get the current date as 'YYYY-MM-DD' format
        return view('add-product-order', compact('currentDate'));
    }


    public function AddPO(Request $req)
    {

        try {
            $result = $this->calculateAndSaveOrderValue($req);


            $units = $result['units'];
            $total_price = $result['total_price'];
            $this->savePurchaseDistributionDetails($req);

            $currentDate = Carbon::now()->toDateString(); // date 'YYYY-MM-DD' format

            return view('add-product-order', compact('currentDate', 'units', 'total_price'))->with('success', 'Form submitted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error occurred while saving purchase distribution details.');
        }
    }
}
