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

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\TugasAkhirController;
Route::get('/tugas-akhir/{id?}', [TugasAkhirController::class, 'index'])
     ->name('tugasakhir.index');
Route::get('/', [App\Http\Controllers\BerandaController::class, 'index'])->name('beranda');
// Route::get('/asatidz', [App\Http\Controllers\AsatidzController::class, 'index'])->name('asatidz');
Route::get('/test', [App\Http\Controllers\BerandaController::class, 'test'])->name('test');
Route::get('/card', [App\Http\Controllers\BerandaController::class, 'card'])->name('card');
Route::get('/struktur', [App\Http\Controllers\StrukturController::class, 'index'])->name('struktur');
Route::get('/galeri/add', [App\Http\Controllers\GaleriController::class, 'add'])->name('add');
Route::get('/prodistik/struktur', [App\Http\Controllers\ProdistikController::class, 'struktur'])->name('strukturProdistik');
Route::get('/prodistik/kurikulum', [App\Http\Controllers\ProdistikController::class, 'kurikulum'])->name('kurikulumProdistik');
Route::resource('berita', App\Http\Controllers\BeritaController::class);
Route::resource('tugasakhir', App\Http\Controllers\TugasAkhirController::class)->except(['index']);
Route::resource('fasilitas', App\Http\Controllers\FasilitasController::class);
Route::resource('asatidz', App\Http\Controllers\AsatidzController::class);
Route::resource('galeri', App\Http\Controllers\GaleriController::class);
Route::resource('ekstra', App\Http\Controllers\EkstraController::class)->except(['show']);
Route::resource('prestasi', App\Http\Controllers\PrestasiController::class);
Route::resource('prodistik', App\Http\Controllers\ProdistikController::class);
Route::resource('tahfiz', App\Http\Controllers\TahfizController::class);
Route::resource('olimpiade', App\Http\Controllers\OlimpiadeController::class)->except(['show']);
use App\Http\Controllers\OlimpiadeController;
Route::get('/olimpiade/prestasi',[OlimpiadeController::class,'prestasi'])->name('olimpiade.prestasi');
use App\Http\Controllers\EkstraController;
Route::get('/ekstra/buat',[EkstraController::class,'buat'])->name('ekstra.buat');
Route::post('/ekstra/tambah',[EkstraController::class,'tambah'])->name('ekstra.tambah');
Route::get('/ekstra/ubah/{id}',[EkstraController::class,'ubah'])->name('ekstra.ubah');
Route::post('/ekstra/ganti/{id}',[EkstraController::class,'ganti'])->name('ekstra.ganti');
Route::delete('/ekstra/hapus/{id}',[EkstraController::class,'hapus'])->name('ekstra.hapus');
use App\Http\Controllers\GaleriController;
Route::delete('/galeri/delete/{kategori}', [GaleriController::class, 'delete'])->name('galeri.delete');

Route::post('/galeri/store-folder', [GaleriController::class, 'storeFolder'])->name('galeri.storeFolder');







Auth::routes();
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/beranda', [App\Http\Controllers\BerandaController::class, 'index'])->name('beranda');
Route::get('/uji', [App\Http\Controllers\halamancontroller::class, 'uji'])->name('uji');
Route::get('/uji2', [App\Http\Controllers\halamancontroller::class, 'uji2'])->name('uji2');
Route::get('/hallo', [App\Http\Controllers\HalloController::class, 'index'])->name('hallo');
Route::get('/history', [App\Http\Controllers\HistoryController::class, 'history'])->name('history');
Route::get('/lihat', [App\Http\Controllers\halamanController::class, 'lihat'])->name('lihat');
Route::get('/ujian', [App\Http\Controllers\halamancontroller::class, 'ujian'])->name('ujian');
Route::get('/result', [App\Http\Controllers\Hasilcontroller::class, 'result'])->name('result');
Route::resource('mapel', App\Http\Controllers\MataPelajaranController::class);
Route::resource('coba', App\Http\Controllers\CobaController::class);
Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');
Route::resource('testimoni', App\Http\Controllers\TestimoniController::class);
Route::resource('courses', App\Http\Controllers\CoursesController::class);
Route::resource('campus', App\Http\Controllers\CampusController::class);
Route::resource('tesuji', App\Http\Controllers\TesUjiController::class)->middleware('auth');
use App\Http\Controllers\EksporController;
Route::get('/ekspor-pdf', [EksporController::class, 'ekspor'])->name('ekspor-pdf');
Route::get('/tesuji/detresult/{id}', [App\Http\Controllers\TesUjiController::class, 'detresult'])->name('tesuji.detresult');
Route::get('/tesuji/dethistory/{id}', [App\Http\Controllers\TesUjiController::class, 'dethistory'])->name('tesuji.dethistory');
Route::get('/tesuji/editPilgan/{id}', [App\Http\Controllers\TesUjiController::class, 'editPilgan'])->name('tesuji.editPilgan');
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::post('/users/{id}/deleteProfile', [UserController::class, 'deleteProfile'])->name('users.deleteProfile');

use App\Http\Controllers\TesUjiController;
Route::get('/tesuji/reset', [TesUjiController::class, 'reset'])->name('tesuji.reset');
Route::get('hasil', [TesUjiController::class, 'hasil'])->name('hasil');
Route::put('/tesuji/updatePilgan/{id}', [TesUjiController::class, 'updatePilgan'])->name('tesuji.updatePilgan');




