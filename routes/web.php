<?php

use App\Http\Controllers\StudentController;
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

//Admin Conferences Management Routes
Route::get('conference', [ConferenceController::class, 'index'])->name('conference.index'); // List all conferences

