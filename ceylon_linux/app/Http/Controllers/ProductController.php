<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRegistrationRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    function productRegistration(ProductRegistrationRequest $req)
    {
        try {
            $validatedProductdata = $req->validated();
            $product = Product::create($validatedProductdata);
            Log::info('Data saved successfully: ' . json_encode($product->toArray()));
        } catch (\Exception $e) {
            Log::error('Error saving data: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error occurred while saving data.');
        }
    }
}
