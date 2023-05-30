<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentalController;
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
});

// Route for displaying the cars table
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

// Route for displaying the car creation form
Route::get('/cars/create-car', [CarController::class, 'create'])->name('cars.create');

// Route for storing the created car
Route::post('/cars', [CarController::class, 'store'])->name('cars.store');


// Route for displaying the car edit form
Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
// Route for updating the car
Route::put('/cars/{car}', [CarController::class, 'update'])->name('cars.update');

// Route for deleting the car
Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('cars.destroy');


// Route for displaying the rentals table
Route::get('/rentals', [RentalController::class, 'index'])->name('rentals.index');

// Route for displaying the rental creation form
Route::get('/rentals/create-rental', [RentalController::class, 'create'])->name('rentals.create-rental');

// Route for storing the created rental
Route::post('/rentals', [RentalController::class, 'store'])->name('rentals.store');

// Route for displaying the car edit form
Route::get('/rentals/{rental}/edit', [RentalController::class, 'edit'])->name('rentals.edit');
// Route for updating the rental
Route::put('/rentals/{rental}', [RentalController::class, 'update'])->name('rentals.update');

// Route for deleting the rental
Route::delete('/rentals/{rental}', [RentalController::class, 'destroy'])->name('rentals.destroy');

require __DIR__.'/auth.php';
