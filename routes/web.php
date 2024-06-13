<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PolylineController;
use App\Http\Controllers\PolygonController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationController;

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

Route::get('/', [MapController::class, 'index'])->name('index');
Route::get('/table', [MapController::class, 'table'])->name('table');
Route::get('/info', [MapController::class, 'info'])->name('info');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk input titik pada dashboard
Route::get('/dashboard', [PointController::class, 'dashboard'])->name('dashboard');
Route::get('/points', [PointController::class, 'index'])->name('api.points');
Route::get('/point/{id}', [PointController::class, 'show'])->name('api.point');
Route::post('/points', [PointController::class, 'store'])->name('store.point');
Route::patch('/point/{id}', [PointController::class, 'update'])->name('update-point');

// Route untuk landing page
Route::get('/landing-page', [MapController::class, 'landingpage'])->name('landing-page');

// Route untuk destinasi
Route::get('/destination', [MapController::class, 'destination'])->name('destination');

// Route untuk artomoro
Route::get('/Artomoro', [DestinationController::class, 'artomoro'])->name('artomoro');

// Route untuk warungsambalbakar
Route::get('/Warung-Sambal-Bakar', [DestinationController::class, 'warungsambalbakar'])->name('warungsambalbakar');

// Route untuk ayammertua
Route::get('/Ayam-Mertua', [DestinationController::class, 'ayammertua'])->name('ayammertua');

// Route untuk ayammertua
Route::get('/KFC', [DestinationController::class, 'kfc'])->name('kfc');

// Route untuk recheese
Route::get('/Richeese', [DestinationController::class, 'richeese'])->name('richeese');

// Route untuk preksu
Route::get('/Preksu', [DestinationController::class, 'preksu'])->name('preksu');

// Route untuk peta publik
Route::get('/index-public', [MapController::class, 'indexPublic'])->name('index.public');

//create point
Route::post('/store-point', [PointController::class, 'store'])->name('store-point');

//delete point
Route::delete('/delete-point/{id}', [PointController::class, 'destroy'])->name('delete-point');

//edit point
Route::get('/edit-point/{id}', [PointController::class, 'edit'])->name('edit-point');

//update point
Route::patch('/update-point/{id}', [PointController::class, 'update'])->name('update-point');

//create polyline
Route::post('/store-polyline', [PolylineController::class, 'store'])->name('store-polyline');

//Delet polyline
Route::delete('/delete-polyline/{id}', [PolylineController::class, 'destroy'])->name('delete-polyline');

//edit polyline
Route::get('/edit-polyline/{id}', [PolylineController::class, 'edit'])->name('edit-polyline');

//Update polyline
Route::patch('/update-polyline/{id}', [PolylineController::class, 'update'])->name('update-polyline');

//create polygon
Route::post('/store-polygon', [PolygonController::class, 'store'])->name('store-polygon');

//Delet polygon
Route::delete('/delete-polygon/{id}', [PolygonController::class, 'destroy'])->name('delete-polygon');

//edit polygon
Route::get('/edit-polygon/{id}', [PolygonController::class, 'edit'])->name('edit-polygon');

//Update polygon
Route::patch('/update-polygon/{id}', [PolygonController::class, 'update'])->name('update-polygon');

Route::get('/about', function () {
    return view('about');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// table
Route::get('/table-point', [PointController::class, 'table'])->name('table-point');
// table
Route::get('/table-polyline', [PolylineController::class, 'table'])->name('table-polyline');
// table
Route::get('/table-polygon', [PolygonController::class, 'table'])->name('table-polygon');


require __DIR__.'/auth.php';
