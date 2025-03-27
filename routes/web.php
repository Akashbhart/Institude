<?php

use App\Http\Controllers\adminsiteController;
use App\Http\Controllers\siteController;
use Illuminate\Support\Facades\Route;

Route::get('/',[siteController::class,'index'])->name('home');
Route::get('/about',[siteController::class,'about_us'])->name('about-us');
Route::get('/contact',[siteController::class,'contact_us'])->name('contact-us');
Route::post('/form',[siteController::class,'form_submit'])->name('form-submit');
Route::post('/login',[siteController::class,'login_check'])->name('login-check');
Route::get('/Admin',[adminsiteController::class,'deshborad'])->name('deshborad-login');
Route::get('/Admin/student',[adminsiteController::class,'add_student_page'])->name('add-student');
Route::get('/Admin/logout',[adminsiteController::class,'logout_session'])->name('logout-session');
Route::post('Admin/studen/store',[adminsiteController::class,'students_store'])->name('students-store');
Route::get('Admin/Show Student',[adminsiteController::class,'view_student'])->name('view-student');
Route::get('/students/{id}/edit', [adminsiteController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [adminsiteController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [adminsiteController::class, 'destroy'])->name('students.destroy');