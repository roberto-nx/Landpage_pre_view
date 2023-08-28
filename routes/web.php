<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmController;
use App\Http\Controllers\ViewController;

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


route::get('adm/show/{id}',[AdmController::class,'edit'])->middleware(['auth'])->name('admShow');
route::get('adm',[AdmController::class,'index'])->middleware(['auth'])->name('adm');
route::get('adm/criar',[AdmController::class,'create'])->middleware(['auth'])->name('admCreate');
route::get('adm/update',[AdmController::class,'update'])->middleware(['auth'])->name('admUpdate');
route::post('adm/salvar',[AdmController::class,'store'])->middleware(['auth'])->name('salvar');
route::get('view/show/{id}',[AdmController::class,'show'])->middleware(['auth'])->name('view');
route::delete('adm/delete/{id}',[AdmController::class,'destroy'])->middleware(['auth'])->name('delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
