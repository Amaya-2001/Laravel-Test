<?php

use App\Http\Controllers\RegionController;
use App\Http\Controllers\TerritoryController;
use App\Http\Controllers\Users;
use App\Http\Controllers\ZoneController;
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

// Add Territory
Route::view('adminTerritory', 'admin-territory');
Route::get('adminTerritory', [TerritoryController::class, 'showAdminTerritory']);
Route::POST('adminTerritory', [TerritoryController::class, 'AddTerritory']);

// users Registration
Route::view('usersReg', 'users');
Route::POST('usersReg', [Users::class, 'userRegistration']);

//product registration
Route::view('product_regs', 'add-sku');
