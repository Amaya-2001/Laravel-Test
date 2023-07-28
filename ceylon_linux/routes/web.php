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

// Route::get('/adminZone', function () {
//     return view('layouts/adminZone');
// });
Route::view('/adminZone', 'admin-zone');
Route::post('/adminZone', [ZoneController::class, 'AddZone']);

// Route::match(['get', 'post'], '/adminZone', [ZoneController::class, 'AddZone']);
