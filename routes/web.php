<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OffreemploiController;
use App\Http\Controllers\PostulerController;

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
 
Route::resource('employees',EmployeeController::class);
Route::resource('offreemplois',OffreemploiController::class);
Route::resource('postulers',PostulerController::class);
//Route::get('/', [EmployeeController::class, 'dashboard']);
Route::post('/check', [EmployeeController::class, 'check'])->name('employees.check');
 
Route::get('auth/logout', [EmployeeController::class, 'logout'])->name('auth.logout');
Route::get('/download{cv}', [EmployeeController::class, 'download'])->name('employees.download');

Route::post('/store', [PostulerController::class, 'store'])->name('postulers.store');  
Route::get('/create/{id_emp}/{id_offre}/{nom_offre}/{nom_emp}', [PostulerController::class, 'create'])->name('postulers.create');


Route::post('/admin', [EmployeeController::class, 'admin'])->name('employees.admin');
Route::get('/', [EmployeeController::class, 'home'])->name('employees.home'); 

Route::group(['middleware'=>['AuthCheck']], function(){ 
Route::get('/dashboard', [EmployeeController::class, 'dashboard'])->name('employees.dashboard'); 

    Route::get('auth/register', [EmployeeController::class, 'register'])->name('auth.register');
Route::get('auth/login', [EmployeeController::class, 'login'])->name('auth.login');
});
