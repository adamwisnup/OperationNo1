<?php

use App\Http\Controllers\Auth\AdminController;
use App\Models\Admins;
use App\Models\DataCaas;
use App\Models\PassCheck;
use App\Models\PassCheckMessage;
use App\Models\Plots;
use App\Models\Shifts;
use App\Models\Stages;
use Illuminate\Http\Request;
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

// welcome page
Route::get('/', function () {
    return view('main');
})->name('main')->middleware('guest:datacaas', 'guest:admin');

// failed page
Route::fallback(function () {
    return redirect('/');
});


Route::get('/home', [CaasController::class, 'home'])->name('home')->middleware('auth:datacaas');

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest:admin','guest:datacaas');

Route::post('/loginCaas', [CaasController::class, 'login'])->name('loginCaas');

Route::get('/logoutCaas', [CaasController::class,'logout'])->name('logoutCaas');
