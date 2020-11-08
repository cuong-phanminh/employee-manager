<?php

use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\CriteriaController;
use App\Http\Controllers\Admin\EmployeeCriteriaController;
use App\Http\Controllers\User\IndexController;
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


//
Route::get('/', [IndexController::class, 'index'])->name('user.index');
Route::get('/point-detail/{id}', [IndexController::class, 'pointDetail'])->name('user.pointDetail');


//amin
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'employee'], function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('employee.index');
        Route::get('/create', [EmployeeController::class, 'create'])->name('employee.create');
        Route::post('/create', [EmployeeController::class, 'store'])->name('employee.store');
        Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
        Route::put('/edit/{id}', [EmployeeController::class, 'update'])->name('employee.update');
        Route::delete('/destroy/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
    });
    Route::group(['prefix' => 'criteria'], function () {
        Route::get('/', [CriteriaController::class, 'index'])->name('criteria.index');
        Route::get('/create', [CriteriaController::class, 'create'])->name('criteria.create');
        Route::post('/create', [CriteriaController::class, 'store'])->name('criteria.store');
        Route::get('/edit/{id}', [CriteriaController::class, 'edit'])->name('criteria.edit');
        Route::put('/edit/{id}', [CriteriaController::class, 'update'])->name('criteria.update');
        Route::delete('/destroy/{id}', [CriteriaController::class, 'destroy'])->name('criteria.destroy');
    });
    Route::group(['prefix' => 'employee-criteria'], function () {
        Route::get('/', [EmployeeCriteriaController::class, 'index'])->name('employee-criteria.index');
        Route::get('/create/{id}', [EmployeeCriteriaController::class, 'create'])->name('employee-criteria.create');
        Route::post('/create/{id}', [EmployeeCriteriaController::class, 'store'])->name('employee-criteria.store');
    });
});
