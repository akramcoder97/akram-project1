<?php
//use App\Http\Controllers\EmployesController;
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

Route::post('employes/store', 'App\Http\Controllers\EmployesController@store');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    });

    Route::post('employes/store', 'EmployeController@store');
    Route::get('employes', 'App\Http\Controllers\EmployesController@index');
    Route::get('employes/create', 'App\Http\Controllers\EmployesController@create');
    Route::post('employes/store', 'App\Http\Controllers\EmployesController@store');
    //Route::get('employes/index', 'App\Http\Controllers\EmployesController@index');



    //Route::get('employes/{registration_number}', 'App\Http\Controllers\EmployesController@show');

   /*  Route::get('employes/{registration_number}', [EmployesController::class, 'show'])->name('employes.show');
    Route::get('employes/{registration_number}', [EmployesController::class, 'edit'])->name('employes.edit');
    Route::get('employes/{registration_number}', [EmployesController::class, 'destroy'])->name('employes.destroy');
 */
    //Route::resource('employes', 'EmployesController:class');
});
