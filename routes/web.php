<?php

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
    return view('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('employees', 'EmployeesController@store')->name('employees.store');
Route::get('employees', 'EmployeesController@index')->name('employees.index');
Route::get('employees/create', 'EmployeesController@create')->name('employees.create');
Route::put('employees/{employee}', 'EmployeesController@update')->name('employees.update');
Route::get('/employees/{employee}', 'EmployeesController@show')->name('employees.show');
Route::delete('/employees/{employee}', 'EmployeesController@destroy')->name('employees.destroy');
Route::get('/employees/{employee}/edit', 'EmployeesController@edit')->name('employees.edit');




