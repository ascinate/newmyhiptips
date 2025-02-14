<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeesController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('admin/login','admin/login');
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('admin/employees',[EmployeesController::class, 'index'])->name('admin.employees');

Route::get('employees/add', [EmployeesController::class, 'add'])->name('admin.employees.add');
Route::post('employees/insert', [EmployeesController::class, 'insertEmployee'])->name('admin.employees.insert');
Route::get('/admin/employees/view/{id}', [EmployeesController::class, 'viewEmployee']);
Route::get('admin/employees/edit/{id}', [EmployeesController::class, 'edit'])->name('admin.employees.edit');
Route::post('admin/employees/update_employee', [EmployeesController::class, 'update_employee'])->name('admin.employees.update');
Route::get('admin/employees/delete/{id}', [EmployeesController::class, 'delete']);


