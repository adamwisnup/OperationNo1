<?php

use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\CaasController;
use App\Http\Controllers\ShiftController;
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

Route::get('/loginCaas', function () {
    return view('loginCaas');
})->name('loginCaas')->middleware('guest:admin','guest:datacaas');

Route::get('/dashboard', [CaasController::class, 'home'])->name('dashboard')->middleware('auth:datacaas');

Route::post('/changepass', [CaasController::class, 'changepass'])->name('changepass')->middleware('auth:datacaas');

Route::post('/loginCaas', [CaasController::class, 'login'])->name('loginCaas');

Route::get('/logoutCaas', [CaasController::class,'logout'])->name('logoutCaas');

// ADMIN
Route::get('/loginAdmin', function () {
    return view('loginAdmin');
})->name('loginAdmin')->middleware('guest:admin', 'guest:datacaas');

Route::get('/adminHome', function () {
    $datacaas = DataCaas::get();
    $stages = Stages::where('statusActive', '=', '0')->get();
    return view('adminHome', ['datacaas' => $datacaas, 'stages' => $stages]);
})->name('adminHome')->middleware('auth:admin');
Route::post('/PassAdmin', [AdminController::class, 'changepass'])->name('changepass')->middleware('auth:admin');
Route::post('/loginAdmin', [AdminController::class, 'login'])->name('loginAdmin');
Route::get('/logoutAdmin', [AdminController::class, 'logout'])->name('logoutAdmin');


// SHIFT
Route::get('/ListShift', function () {
    $shift = Shifts::orderBy('day', 'asc')->orderBy('time_start', 'asc')->paginate(10);
    $countshift = Shifts::count();
    $stagesname = Stages::pluck('stagesname');
    $passcheck = PassCheck::find(1);
    \Carbon\Carbon::setLocale('id');
    return view('shift', ['shift' => $shift, 'countshift' => $countshift, 'stagesname' => $stagesname, 'passcheck' => $passcheck]);
})->name('ListShift')->middleware('auth:admin');
Route::post('/addShift', function (Request $request) {
    Shifts::create([
        'shiftname' => $request->shiftname,
        'day' => $request->day,
        'time_start' => $request->time_start,
        'time_end' => $request->time_end,
        'quota' => $request->quota,
    ]);
    return redirect('ListShift');
})->name('addShift')->middleware('auth:admin');
Route::get('/EditShift/{id}', function ($id) {
    $shift = Shifts::find($id);
    $passcheck = PassCheck::find(1);
    if (!$shift || $passcheck->isPlotRun == 1) {
        return redirect('ListShift');
    }
    return view('editshift', [
        'id' => $shift->id,
        'shiftname' => $shift->shiftname,
        'day' => $shift->day,
        'time_start' => $shift->time_start,
        'time_end' => $shift->time_end,
        'quota' => $shift->quota,
    ]);
})->name('EditShift')->middleware('auth:admin');

Route::post('UpdateShift/{id}', function (Request $request, $id) {
    $passcheck = PassCheck::find(1);
    if (!$passcheck || $passcheck->isPlotRun == 1) {
        return redirect('ListShift');
    }
    Shifts::where('id', $id)->update([
        'shiftname' => $request->shiftname,
        'day' => $request->day,
        'time_start' => $request->time_start,
        'time_end' => $request->time_end,
        'quota' => $request->quota,
    ]);
    return redirect('ListShift');
})->name('UpdateShift')->middleware('auth:admin');

Route::post('deleteShift/{id}', function ($id) {
    $passcheck = PassCheck::where('id', 1)->first();
    if ($passcheck->isPlotRun == 0) {
        $shift = Shifts::where('id', $id)->delete();
        return redirect('ListShift');
    } else return redirect('ListShift');
})->name('deleteShift')->middleware('auth:admin');

Route::post('/deleteShiftconfirm', function (Request $request) {
    $shift = Shifts::where('id', $request->id)->first();
    $passcheck = PassCheck::where('id', 1)->first();
    if ($passcheck->isPlotRun == 0)
        return view('delshift', [
            'id' => $shift->id,
            'shiftname' => $shift->shiftname,
            'day' => $shift->day,
            'time_start' => $shift->time_start,
            'time_end' => $shift->time_end,
            'quota' => $shift->quota,
        ]);
    else return redirect('ListShift');
})->name('deleteShiftconfrim')->middleware('auth:admin');

Route::post('deleteAllShift', function () {
    $shift = Shifts::whereNotNull('id')->delete();
    $plot = Plots::whereNotNull('id')->delete();
    return redirect('/ListShift');
})->name('deleteAllShift')->middleware('auth:admin');


