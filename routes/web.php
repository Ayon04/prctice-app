<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\StudentController;
use App\Services\StudentService;

Route::get('/', function () {
    return view('home');
});


Route::get('/signup', function () {
    return view('signup');
});


// Route::get('/student-table', function () {
//     return view('students',compact('students'));
// });

//students.blade   ViewStudent

Route::post('/sign_up', [StudentController::class, 'store'])->name('signup');

Route::get('/student-table', [StudentController::class, 'ViewStudent']);

Route::get('/delete/{id}', [StudentController::class, 'remove']);
