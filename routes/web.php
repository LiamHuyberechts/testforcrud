<?php

use App\Http\Controllers\TeamController;
use App\Session;
use App\Student;
use App\Team;
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
    $teams = Team::get();
    $sessions = Session::get();
    $result = compact('students', 'teams', 'sessions');

    return view('welcome', $result);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::Resource('/student', 'StudentController');
Route::resource('/team', 'TeamController');
Route::resource('/session', 'SessionController');
