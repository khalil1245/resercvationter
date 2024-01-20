<?php
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClasseController;
use App\Models\Horaire;
use App\Http\Controllers\HoraireController;
use App\Http\Controllers\ReservationController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route ::get('/zone',[ZoneController::class,'zone']);
});

require __DIR__.'/auth.php';
Route::get('Zones',[ZoneController::class,'index'])->name('zone');
Route::get('Classes',[ClasseController::class,'index'])->name('classe');
Route::get('Horaires',[HoraireController::class,'index'])->name('horaire');
// Route::get('Reservation',[ReservationController::class,'listeclasse'])->name('reservation');
// Route::get('Reservation',[ReservationController::class,'listezone'])->name('reservation');

// route pour enregistrer une reservation
Route::get('reservations',[ReservationController::class,'index'])->name('reservations');
Route::post('Reservation',[ReservationController::class,'store'])->name('Reservation');

