<?php

use App\Http\Controllers\EmployeesController;
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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});



Route::get("/allemployees",[EmployeesController::class,"index"])->name("allemployees");
Route::get("/create",[EmployeesController::class,"create"])->name("createemp");
Route::post("/store",[EmployeesController::class,"store"])->name("storeemp");
Route::get("editemp/{id}",[EmployeesController::class,"edit"])->name("editemp");
Route::put("update/{id}",[EmployeesController::class,"update"])->name("updateemp");
Route::get("delete/{id}",[EmployeesController::class,"delete"])->name("deleteemp");
Route::get("show/{registration_number}",[EmployeesController::class,"show"])->name("showemp");
Route::get("employe/{registration_number}/vacation",[EmployeesController::class,"vacation_request"])->name("vacationemp");