<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/StudentSavePage', function () {
    return view('index');
});

Route::get('/StudentViewPage', function(){
    return view('student');
});

Route::controller(StudentController::class)->group(function (){
    Route::get('/AddStudent','Addstudent');
    Route::post('/saveStudent','save')->name('student.save');
});