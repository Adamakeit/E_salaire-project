<?php

use App\Http\Controllers\appcontroller;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\usercontroller;
use App\Http\Requests\departementrequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [appcontroller::class, 'dashboard'])->name('dashboard');
    Route::get('/departement', [DepartementController::class, 'index'])->name('index');
    Route::get('/departement/create', [DepartementController::class, 'create'])->name('create');
    Route::get('/logout', [usercontroller::class, 'logout'])->name('logout');
    Route::post('/departement/create', [DepartementController::class, 'store'])->name('departement_store');
    Route::get('/edit/{departement}', [DepartementController::class, 'edit'])->name('edit');
    Route::put('/edit/{departement}', [DepartementController::class, 'update'])->name('update');
    Route::get('/delete/{departement}', [DepartementController::class, 'delete'])->name('delete');
    Route::get('/employer', [EmployerController::class, 'index'])->name('employer');
    Route::get('/employer/create', [EmployerController::class, 'create'])->name('employer_create');
    Route::post('/employer/create', [EmployerController::class, 'store'])->name('employer_store');
    Route::get('/editer/{employer}', [EmployerController::class, 'editer'])->name('employer_editer');
    Route::put('/editer/{employer}', [EmployerController::class, 'update'])->name('employer_update');
    Route::get('employer/{employer}/delete', [EmployerController::class, 'delete'])->name('employer_delete');
    Route::get('/config', [ConfigController::class, 'index'])->name('index_config');
    Route::get('/config/create', [ConfigController::class, 'create'])->name('create_config');
    Route::post('/config/create', [ConfigController::class, 'store'])->name('store_config');
    Route::get('config/{config}/delete', [ConfigController::class, 'delete'])->name('delete_config');
    Route::get('/utilisateur', [usercontroller::class, 'utilisateur'])->name('utilisateur');
});

Route::get('/register', [usercontroller::class, 'register'])->name('register');
Route::post('/register', [usercontroller::class, 'handleregister'])->name('register');
Route::get('/login', [usercontroller::class, 'login'])->name('login');
Route::post('/login', [usercontroller::class, 'handlelogin'])->name('login');
