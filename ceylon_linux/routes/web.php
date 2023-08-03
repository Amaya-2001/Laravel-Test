<?php

use App\Http\Controllers\OrderDistributionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseDistributionDetailsController;
use App\Http\Controllers\PurchaseOrderDetailsController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\TerritoryController;
use App\Http\Controllers\Users;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\ZoneRegionController;
use App\Models\Zone;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Add Zone Form
Route::view('adminZone', 'admin-zone');
Route::POST('adminZone', [ZoneController::class, 'AddZone']);
Route::get('adminZone', [ZoneController::class, 'showAdminZone']);

// Add Region Form
Route::view('adminRegion', 'admin-region');
Route::get('adminRegion', [RegionController::class, 'showAdminRegion']);
Route::POST('adminRegion', [RegionController::class, 'AddRegion']);
Route::get('adminRegion', [ZoneController::class, 'getZone']);

// Add Territory
Route::view('adminTerritory', 'admin-territory');
Route::POST('adminTerritory', [TerritoryController::class, 'AddTerritory']);
Route::get('adminTerritory', [ZoneRegionController::class, 'getZoneAndRegionForTerritory']);


// users Registration
Route::view('usersReg', 'users');
Route::get('usersReg', [TerritoryController::class, 'getTerritory']);
Route::POST('usersReg', [Users::class, 'userRegistration']);

//product registration
Route::view('product_regs', 'add-sku');
Route::POST('product_regs', [ProductController::class, 'productRegistration']);

//add product order
Route::view('product_order', 'add-product-order');
Route::get('product_order', [OrderDistributionController::class, 'showPurchaseDistributionDate']); //to get the current date automatically
Route::POST('product_order', [OrderDistributionController::class, 'AddPO']); //save the purchase distrubution details
