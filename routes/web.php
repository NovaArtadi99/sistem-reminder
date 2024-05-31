<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AksesGadgetController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FiturAplikasiController;
use App\Http\Controllers\Admin\FiturController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\MasterAdminController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ReminderController;
use App\Http\Controllers\Admin\SolusiHargaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\BlogPageController;
use App\Http\Controllers\User\FiturPageController;
use App\Http\Controllers\User\GaleryPageController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PricePageController;
use Illuminate\Support\Facades\Route;




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

// Frontpage
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/fitur', [FiturPageController::class, 'fitur'])->name('frontpage.fitur');
Route::get('/gallery', [GaleryPageController::class, 'gallery'])->name('frontpage.gallery');
Route::get('/price', [PricePageController::class, 'price'])->name('frontpage.price');
Route::get('/blog', [BlogPageController::class, 'blog'])->name('frontpage.blog');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login_proses'])->name('login.proses');

Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'],
    function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/admin', [DashboardController::class, 'index'])->name('admin');
        //Route::get('/logout', [LogoutController::class, 'process'])->name('logoutProcess');
        Route::get('/logout', [LoginController::class, 'logout'])->name('logoutProcess');

        //Update Profile Admin
        Route::get('/profile', [ProfileController::class,'index',])->name('profile.index');
        Route::patch('/profile/{id}', [ProfileController::class,'update',])->name('profile.update');

        Route::get('/master/admin', [MasterAdminController::class, 'index'])->name('masterAdmin.index');
        Route::get('/create', [MasterAdminController::class, 'create'])->name('masterAdminCreate');
        Route::post('/insert', [MasterAdminController::class, 'insert'])->name('masterAdminInsert');
        Route::get('/edit/{admin_id}', [MasterAdminController::class, 'edit'])->name('masterAdminEdit');
        Route::post('/update/{admin_id}', [MasterAdminController::class, 'update'])->name('masterAdminUpdate');
        Route::get('/delete/{admin_id}', [MasterAdminController::class, 'delete'])->name('masterAdminDelete');

        Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
        Route::get('admin-users/create', [UserController::class, 'create'])->name('admin.users.create');
        Route::post('admin-users', [UserController::class, 'store'])->name('admin.users.store');
        Route::get('/admin-users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
        Route::put('/admin-users/{user}/update', [UserController::class, 'update'])->name('admin.users.update');
        Route::delete('/admin/users/{user}/delete', [UserController::class, 'destroy'])->name('admin.users.delete');

        // Home page
        Route::get('/list', [HomePageController::class, 'index'])->name('list.index');
        Route::put('/home/update/{id}', [HomePageController::class, 'update'])->name('home.update');

        // Fitur Title
        Route::get('/fitur', [FiturController::class, 'index'])->name('fitur.index');
        Route::put('/fitur/update/{id}', [FiturController::class, 'update'])->name('fitur.update');

        // Fitur Aplikasi
        Route::get('app/', [FiturAplikasiController::class, 'index'])->name('app.index');
        Route::get('app/create', [FiturAplikasiController::class, 'create'])->name('app.create');
        Route::post('app/store', [FiturAplikasiController::class, 'store'])->name('app.store');
        Route::get('app/{id}/edit', [FiturAplikasiController::class, 'edit'])->name('app.edit');
        Route::put('app/{id}/update', [FiturAplikasiController::class, 'update'])->name('app.update');
        Route::delete('app/{id}/delete', [FiturAplikasiController::class, 'destroy'])->name('app.delete');

        // Fitur Akses gadget
        Route::get('/akses', [AksesGadgetController::class, 'index'])->name('akses.index');
        Route::put('/akses/update/{id}', [AksesGadgetController::class, 'update'])->name('akses.update');

        // Fitur Permudah Reminder
        Route::get('/reminder', [ReminderController::class, 'index'])->name('reminder.index');
        Route::put('/reminder/update/{id}', [ReminderController::class, 'update'])->name('reminder.update');

        // Testimoni Data

        // Solusi Harga
        Route::get('/title', [SolusiHargaController::class, 'index'])->name('solusi.index');
        Route::put('/title/update/{id}', [SolusiHargaController::class, 'update'])->name('solusi.update');

        //Price
        Route::get('price/', [PriceController::class, 'index'])->name('price.index');
        Route::get('price/create', [PriceController::class, 'create'])->name('price.create');
        Route::post('price/store', [PriceController::class, 'store'])->name('price.store');
        Route::get('price/{id}/edit', [PriceController::class, 'edit'])->name('price.edit');
        Route::put('price/{id}/update', [PriceController::class, 'update'])->name('price.update');
        Route::delete('price/{id}/delete', [PriceController::class, 'destroy'])->name('price.delete');

        // List Price

        // Fitur Optimal
        Route::get('/fitur_optimal', [FiturOptimalController::class, 'index'])->name('optimal.index');
        Route::put('/fitur_optimal/update/{id}', [FiturOptimalController::class, 'update'])->name('optimal.update');

        // About
        Route::get('/about', [AboutController::class, 'index'])->name('about.index');
        Route::put('/about/update/{id}', [AboutController::class, 'update'])->name('about.update');

        // Kontak
        Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
        Route::put('/contact/update/{id}', [ContactController::class, 'update'])->name('contact.update');
        // E.A
});


