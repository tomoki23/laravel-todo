<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskIndexController;
use App\Http\Controllers\TaskCreateController;
use App\Http\Controllers\TaskStoreController;
use App\Http\Controllers\TaskShowController;
use App\Http\Controllers\TaskEditController;
use App\Http\Controllers\TaskUpdateController;
use App\Http\Controllers\TaskDeleteController;
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
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });
    Route::prefix('tasks')->name('tasks.')->group(function () {
        Route::get('', [TaskIndexController::class, 'index'])->name('index');
        Route::get('/create', [TaskCreateController::class, 'create'])->name('create');
        Route::post('/', [TaskStoreController::class, 'store'])->name('store');
        Route::prefix('/{id}')->group(function () {
            Route::get('/', [TaskShowController::class, 'show'])->name('show');
            Route::get('/edit', [TaskEditController::class, 'edit'])->name('edit');
            Route::put('/update', [TaskUpdateController::class, 'update'])->name('update');
            Route::delete('/delete', [TaskDeleteController::class, 'destroy'])->name('delete');
        });
    });
});


require __DIR__ . '/auth.php';
