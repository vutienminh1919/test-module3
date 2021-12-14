<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/employees')->group(function (){
    Route::get('/',[EmployeeController::class,'index'])->name('employees.index');
    Route::get('/create',[EmployeeController::class,'create'])->name('employees.create');
    Route::post('/create',[EmployeeController::class,'store'])->name('employees.store');
    Route::get('/{id}/edit',[EmployeeController::class,'edit'])->name('employees.edit');
    Route::post('/{id}/edit',[EmployeeController::class,'update'])->name('employees.update');
    Route::get('/{id}/delete',[EmployeeController::class,'destroy'])->name('employees.destroy');
    Route::get('/search',[EmployeeController::class,'search'])->name('employees.search');


});
