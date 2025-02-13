<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Employees;

Route::get('/', function () {
    return view('welcome');
});

Route::view('admin/login','admin/login');
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('admin/employees',[Employees::class, 'index'])->name('admin.employees');

Route::get('employees/add', [Employees::class, 'add'])->name('admin.employees.add');
// Route::post('employees/insert', [Employees::class, 'insertEmployee'])->name('admin.employees.insert');
// Route::get('employees/{id}/edit', [Employees::class, 'edit'])->name('admin.employees.edit');
// Route::post('employees/{id}/update', [Employees::class, 'updateEmployee'])->name('admin.employees.update');
// Route::get('employees/{id}/view', [Employees::class, 'view'])->name('admin.employees.view');
// Route::get('employees/{id}/delete', [Employees::class, 'delete'])->name('admin.employees.delete');
