<?php

use App\Http\Middleware\MultiAuthUser;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifyEmailController;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

// Route::get('user/register', [UserController::class, 'register']);
// Route::get('user/login', [UserController::class, 'login']);
// Route::get('user/registration-success', [UserController::class, 'regi']);


Route::group(['prefix' => 'user/'], function () {
    Route::get("register", [UserController::class, "register"]);
    Route::post("process-register", [UserController::class, "processRegister"]);
    Route::get("register-success/{id}", [UserController::class, "registerSuccess"]);

    // next week
    Route::get("login", [UserController::class, "login"])->name("login");
    Route::post("process-login", [UserController::class, "processLogin"]);
    Route::get("process-logout", [UserController::class, "processLogout"]);
});

// Proses Verifikasi email
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'verify'])
    ->middleware(['throttle:6,1']) // 6 eksekusi per IP setiap 1 menit
    ->name('verification.verify');

// Resend New Verification Email
Route::get('/email/verification/{id}', function ($id) {
    $user = User::where("id", $id)->first();

    $user->sendEmailVerificationNotification();

    return redirect("user/register-success/$id")->withSuccess("Link berhasil di kirim kan kembali!");
})->middleware(['throttle:6,1'])->name('verification.send');

Route::get('/member', [MemberController::class, 'card'])->middleware(['auth', 'check-access:0']);
// Route::get('/member/list', [MemberController::class, 'list'])->middleware(['auth', 'check-access:1']);
Route::get('/member/detail/lihat',[MemberController::class, 'Detail'])->middleware(['auth', 'check-access:0']);
Route::get('/member/detail/transaksi',[MemberController::class, 'Transaksi'])->middleware(['auth', 'check-access:0']);

Route::get('/adminhome', function() {
    return view('adminhome');
});

Route::prefix('dashboard')->group(function(){
    route::get('/view',[DashboardController::class, 'DashboardView'])->name('user.view');
    // route::get('/add',[DashboardController::class, 'DashboardAdd'])->name('dashboard.add');
    // route::post('/store',[DashboardController::class, 'DashboardStore'])->name('dashboards.store');
    // route::get('/edit/{id}',[DashboardController::class, 'DashboardEdit'])->name('dashboards.edit');
    // route::post('/update/{id}',[DashboardController::class, 'DashboardUpdate'])->name('dashboards.update');
    route::get('/delete/{id}',[DashboardController::class, 'DashboardDelete'])->name('dashboards.delete');
});

Route::prefix('coach')->group(function(){
    route::get('/view',[CoachController::class, 'CoachView'])->name('coach.view');
    route::get('/add',[CoachController::class, 'CoachAdd'])->name('coach.add');
    route::post('/store',[CoachController::class, 'CoachStore'])->name('coachs.store');
    route::get('/edit/{id}',[CoachController::class, 'CoachEdit'])->name('coachs.edit');
    route::post('/update/{id}',[CoachController::class, 'CoachUpdate'])->name('coachs.update');
    route::get('/delete/{id}',[CoachController::class, 'CoachDelete'])->name('coachs.delete');
});

Route::prefix('paket')->group(function(){
    route::get('/view',[PaketController::class, 'PaketView'])->name('paket.view');
    route::get('/add',[PaketController::class, 'PaketAdd'])->name('paket.add');
    route::post('/store',[PaketController::class, 'PaketStore'])->name('pakets.store');
    route::get('/edit/{id}',[PaketController::class, 'PaketEdit'])->name('pakets.edit');
    route::post('/update/{id}',[PaketController::class, 'PaketUpdate'])->name('pakets.update');
    route::get('/delete/{id}',[PaketController::class, 'PaketDelete'])->name('pakets.delete');
});

Route::prefix('jadwal')->group(function(){
    route::get('/view',[JadwalController::class, 'JadwalView'])->name('jadwal.view');
    route::get('/add',[JadwalController::class, 'JadwalAdd'])->name('jadwal.add');
    route::post('/store',[JadwalController::class, 'JadwalStore'])->name('jadwals.store');
    route::get('/edit/{id}',[JadwalController::class, 'JadwalEdit'])->name('jadwals.edit');
    route::post('/update/{id}',[JadwalController::class, 'JadwalUpdate'])->name('jadwals.update');
    route::get('/delete/{id}',[JadwalController::class, 'JadwalDelete'])->name('jadwals.delete');
});