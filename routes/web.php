<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('pokemon', [PokemonController::class, 'index'])
->middleware(['auth', 'verified'])->name('index-pokemon');
Route::get('pokemon/create', [PokemonController::class, 'create'])
->middleware(['auth', 'verified'])->name('create-pokemon');
Route::post('pokemon', [PokemonController::class, 'store'])
->middleware(['auth', 'verified'])->name('store-pokemon');
Route::get('pokemon/{id}/edit', [PokemonController::class, 'edit'])
->middleware(['auth', 'verified'])->name('edit-pokemon');
Route::put('pokemon/{id}', [PokemonController::class, 'update'])
->middleware(['auth', 'verified'])->name('update-pokemon');
Route::delete('pokemon/{id}', [PokemonController::class, 'destroy'])
->middleware(['auth', 'verified'])->name('destroy-pokemon');

Route::get('trainer', [TrainerController::class, 'index']);
Route::get('trainer/create', [TrainerController::class, 'create']);
Route::post('trainer', [TrainerController::class, 'store']);
Route::get('trainer/{id}/edit', [TrainerController::class, 'edit']);
Route::put('trainer/{id}', [TrainerController::class, 'update']);
Route::delete('trainer/{id}', [TrainerController::class, 'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


