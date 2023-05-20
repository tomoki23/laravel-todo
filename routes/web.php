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
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/tasks', [TaskIndexController::class, 'index'])->name('tasks.index');
    Route::get('/tasks/create', [TaskCreateController::class, 'create'])->name('tasks.create');
    Route::post('/tasks', [TaskStoreController::class, 'store'])->name('tasks.store');
    Route::get('/tasks/{id}', [TaskShowController::class, 'show'])->name('tasks.show');
    Route::get('/tasks/{id}/edit', [TaskEditController::class, 'edit'])->name('tasks.edit');
    Route::put('/tasks/{id}/update', [TaskUpdateController::class, 'update'])->name('tasks.update');
    Route::delete('/tasks/{id}/delete', [TaskDeleteController::class, 'destroy'])->name('tasks.delete');
});


require __DIR__ . '/auth.php';
