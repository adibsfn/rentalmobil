<?php
use App\Models\Kembali;
use App\Models\Rental;
use App\Models\Mobil;
use App\Http\Controllers\KembalikanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\RentalController;

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
    return view('home', [
        'judul' => 'Selamat Datang ' .auth()->user()->name.'!',
        'title' => 'Dashboard',
        'mobil' => Mobil::all(),
        'rental' => Rental::all(),
        'selesai' => Kembali::all(),
    ]);
})->middleware('auth');


Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate']);

Route::get('register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class, 'store']);

Route::post('logout', [LoginController::class, 'logout']);

Route::resource('/mobils', MobilController::class)->middleware('auth');
Route::resource('/rentals', RentalController::class)->middleware('auth');

Route::get('/riwayats', function () {
    return view('riwayats.index', [
        'judul' => 'Selamat Datang ',
        'title' => 'Dashboard',
        'riwayats' => Kembali::where('id_user', auth()->user()->id)->get(),
    ]);
})->middleware('auth');






