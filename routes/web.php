<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Models\Fiber;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controller::class, 'showHome'])->name('home');
Route::redirect('/', 'maintenance');
Route::post('/sendForm', [Controller::class, 'sendForm'])->name('sendForm');


Route::get('/fibers', function () {
    $armorFiber = Fiber::first();
    return view('fiber', ['armorFiber' => $armorFiber]);
})->name('fibers');

Route::get('/engineering', function () {
    return view('engineering');
})->name('engineer');

Route::get('/test', function () {
    return view('home');
})->name('tempHome');

Route::get('/maintenance', function () {
    return view('maintenance');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
