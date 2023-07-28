<?php

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

Route::get('/admin', function () {
    return view('layouts/admin');
});

// Route::post('/admin', function () {

//     $adminZone = new Zone();
//     $adminZone->zone_long_description = request('zlDescription');
//     $adminZone->short_description = request('shortDescription');
//     $adminZone->save();

//     return redirect()->back()->with('success', 'Data saved successfully!');
// });

Route::post('/admin', [ZoneController::class, 'AddZone']);
