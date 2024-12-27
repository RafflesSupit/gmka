<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\MessageController;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});

Route::get('/berita/show/{id}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
Route::get('/berita/view', [BeritaController::class, 'view'])->name('berita.view');
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');

Route::get('/', [HomeController::class, 'index']);

Route::get('/acara/show/{id}', [AcaraController::class, 'show'])->name('acara.show');
Route::get('/acara/create', [AcaraController::class, 'create'])->name('acara.create');
Route::get('/acara/view', [AcaraController::class, 'view'])->name('acara.view');
Route::post('/acara', [AcaraController::class, 'store'])->name('acara.store');

Route::get('/admin/panel', [HomeController::class, 'adminpanel'])->name('admin.panel');
Route::get('/admin/panel', [HomeController::class, 'adminCount'])->name('admin.panel');
Route::get('/admin/adminacara', [HomeController::class, 'adminacara'])->name('admin.adminacara');
Route::delete('/admin/adminacara/{id}', [AcaraController::class, 'delete'])->name('adminacara.delete');
Route::get('/admin/adminberita', [HomeController::class, 'adminberita'])->name('admin.adminberita');
Route::delete('/admin/adminberita/{id}', [BeritaController::class, 'delete'])->name('adminberita.delete');

Route::get('/admin/acara/{id}/edit', [AcaraController::class, 'edit'])->name('admin.acara.edit');
Route::put('/acara/{id}', [AcaraController::class, 'update'])->name('admin.acara.update');

Route::get('/admin/berita/{id}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');

Route::get('/fasilitas/fasilitas', [HomeController::class, 'faci'])->name('fasilitas.fasilitas');
Route::get('/about', [HomeController::class, 'about'])->name('about.about');

Route::get('/docs',[MessageController::class,'index'])->name('docs.documentation');
Route::post('/docs/message', [MessageController::class, 'store'])->name('messages.store');

Route::get('/contact',[HomeController::class,'contact'])->name('contact.contact');
