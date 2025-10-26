<?php

use App\Http\Controllers\EmployeeController;
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

Route::get("/",function(){
    return view("home");
})->name("home");
Route::get("/edit",function(){
    return view("edit");
})->name("edit");
Route::get("/ajout",function(){
    return view("ajout");
})->name("ajout");



Route::get('/employee', [EmployeeController::class, 'index'])->name('employees.index');
Route::post('/employes', [EmployeeController::class, 'store'])->name('employes.store');
Route::get('/employes/{id}/edit', [EmployeeController::class, 'edit'])->name('employes.edit');
Route::put('/employes/{id}', [EmployeeController::class, 'update'])->name('employes.update');
Route::get('/employes/{id}/delete', [EmployeeController::class, 'destroy'])->name('employes.destroy');

