<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Routes for student
Route::get('/', [StudentController::class, 'home'])->name('home');
Route::post('student/register', [StudentController::class, 'register'])->name('student.register');
Route::get('/profile', [StudentController::class, 'profile'])->name('student.profile');

//Clients Routes
Route::get('client/create', [ClientController::class, 'create'])->name('client.create'); // Show form to


//Employee Routes
Route::get('employee', [EmployeeController::class, 'index'])->name('employee.index'); // List all employees
// Admin User Management Routes
Route::get('admin/user', [UserController::class, 'index'])->name('admin.user.index'); // List all conferences
Route::get('admin/user/show/{user}', [UserController::class, 'show'])->name('admin.user.show'); // List all conferences
Route::get('admin/user/create', [UserController::class, 'create'])->name('admin.user.create'); // Show form to
Route::post('admin/user', [UserController::class, 'store'])->name('admin.user.store'); // Store new admin.user
Route::get('admin/user/edit/{user}', [UserController::class, 'edit'])->name('admin.user.edit'); // Show form to edit an existing admin.user
Route::put('admin/user/{user}', [UserController::class, 'update'])->name('admin.user.update'); // Update the existing admin.user
Route::delete('admin/user/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');

//Admin Conferences Management Routes
Route::get('conference', [ConferenceController::class, 'index'])->name('conference.index'); // List all conferences

