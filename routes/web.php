<?php

use App\Student;
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
    $students = Student::get();

    return view('welcome', ['students' =>$students]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::Resource('/student', 'StudentController');
