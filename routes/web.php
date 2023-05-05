<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Models\Fiber;
use Illuminate\Support\Str;

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

Route::get('/{locale?}', [Controller::class, 'showHome'])->name('home');
// Route::redirect('/', '/test/{locale?}');
Route::post('/sendBasicForm', [Controller::class, 'sendBasicForm'])->name('sendBasicForm');
Route::post('/fibers/sendBasicForm', [Controller::class, 'sendBasicForm']);

Route::post('/sendProject', [Controller::class, 'sendDetailedForm'])->name('sendProjectForm');
Route::post('{locale?}/sendProject', [Controller::class, 'sendDetailedForm']);
Route::post('engineering/sendProject', [Controller::class, 'sendDetailedForm']);
// Route::post('/sendForm', [Controller::class, 'sendBasicForm'])->name('sendForm');
Route::get('/projectSend/{locale?}', [Controller::class, 'showProjectSend'])->name('projectSend');

Route::get('/fibers/{locale?}', function ($locale = 'en') {
    App::setLocale($locale);
    $armorFiber = Fiber::first();
    return view('fiber', ['armorFiber' => $armorFiber]);
})->name('fibers');

Route::get('/engineering/{locale?}', function ($locale = 'en') {
    if(Str::contains(url()->previous(), 'es') && url()->previous() !== url()->route('engineer')) {
        $locale = 'es';
    }
    App::setLocale($locale);
    return view('engineering');
})->name('engineer');


Route::get('/test/{locale?}', function ($locale = 'en') {
    App::setLocale($locale);
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

require __DIR__ . '/auth.php';
