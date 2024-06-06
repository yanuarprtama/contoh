<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\administrator;
use App\Http\Controllers\alat;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\kuisionerController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\labController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\peminjamanAlat;
use App\Http\Controllers\peminjamanLab;
use App\Http\Controllers\pengembalianLab;
use App\Http\Controllers\prodi;
use App\Http\Controllers\sliderController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', [dashboard::class, 'index'])->name('dashboard');
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/proseslogin', [LoginController::class, 'proseslogin']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/lab', [labController::class, 'index'])->name('lab')->middleware('auth');
Route::get('tambahlab', [labController::class, 'tambah'])->name('tambahlab')->middleware('auth');
Route::post('/prosestambahlab', [labController::class, 'prosestambahlab'])->middleware('auth');

Route::get('/administrator', [administrator::class, 'index'])->name('administrator')->middleware('auth');
Route::get('/tambahadmin', [administrator::class, 'tambahadmin'])->name('tambahadmin')->middleware('auth');
Route::post('/prosestambahadmin', [administrator::class, 'prosestambahadmin'])->middleware('auth');

Route::get('/prodi', [prodi::class, 'index'])->name('prodi')->middleware('auth');
Route::get('/tambahprodi', [prodi::class, 'tambah'])->name('tambahprodi')->middleware('auth');
Route::post('/prosestambahprodi', [prodi::class, 'prosestambah'])->middleware('auth');

Route::get('/alat', [alat::class, 'index'])->name('alat')->middleware('auth');
Route::get('/tambahalat', [alat::class, 'tambah'])->name('tambahalat')->middleware('auth');
Route::post('/prosestambahalat', [alat::class, 'prosestambah'])->middleware('auth');

Route::get('/halaman', [halamanController::class, 'index'])->name('halaman')->middleware('auth');
Route::get('/slider', [sliderController::class, 'index'])->name('slider')->middleware('auth');

Route::get('/pertanyaan', [kuisionerController::class, 'index'])->name('pertanyaan')->middleware('auth');
Route::get('/tambahpertanyaan', [kuisionerController::class, 'tambahpertanyaan'])->name('tambahpertanyaan')->middleware('auth');
Route::post('/prosestambahpertanyaan', [kuisionerController::class, 'prosestambahpertanyaan'])->middleware('auth');

Route::get('/kritiksaran', [kuisionerController::class, 'kritiksaran'])->name('kritiksaran')->middleware('auth');

Route::get('/peminjamanlab', [peminjamanLab::class, 'index'])->name('peminjamanlab')->middleware('auth');
Route::get('/peminjamanAlat', [peminjamanAlat::class, 'index'])->name('peminjamanAlat')->middleware('auth');
Route::get('/pengembalianLab', [pengembalianLab::class, 'index'])->name('pengembalianlab')->middleware('auth');

Route::get('/form-peminjaman-lab', [peminjamanLab::class, 'index'])->name('formlab')->middleware('auth');
Route::post('/form-peminjaman-lab', [peminjamanLab::class, 'tambah'])->name('tambah-peminjaman-lab')->middleware('auth');

Route::get('/form-peminjaman-alat', [peminjamanAlat::class, 'index'])->name('formalat')->middleware('auth');
Route::post('/form-peminjaman-alat', [peminjamanAlat::class, 'index'])->name('formalat')->middleware('auth');


// Route::get('/form-peminjaman-lab', function () {
//     return view('peminjaman/formlab');
// });
