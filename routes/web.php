<?php

use App\Http\Controllers\DapertemenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MasterModulController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    // return view('welcome');

    return redirect()->route('login');
});

Route::prefix('internal')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::get('kategori-produk', [KategoriController::class, 'index'])
            ->name('kategori-produk');
        Route::get('kategori-produk/data', [KategoriController::class, 'data'])
            ->name('kategori-produk.data');
        Route::post('kategori/store', [KategoriController::class, 'store'])
            ->name('kategori.store');
        // Route::post('kategori-produk/update', [KategoriController::class, 'update'])
        Route::post('kategori/hapus', [KategoriController::class, 'destroy'])
            ->name('kategori.hapus');
        Route::get('kategori-produk/getDataById', [KategoriController::class, 'getDataById'])
            ->name('kategori-produk.getDataById');


        Route::get('dapertemen', [DapertemenController::class, 'index'])
            ->name('dapertemen');
        Route::get('dapertemen/data', [DapertemenController::class, 'data'])
            ->name('dapertemen.data');
        Route::post('dapertemen/store', [DapertemenController::class, 'store'])
            ->name('dapertemen.store');
        Route::post('dapertemen/update', [DapertemenController::class, 'update'])
            ->name('dapertmeen.update');
        Route::post('dapertemen/destroy', [DapertemenController::class, 'destroy'])
            ->name('dapertmene.destroy');
        Route::get('dapertemen/getDataById', [DapertemenController::class, 'getDataById'])
            ->name('dapertemen.getDataById');


        Route::get('jabatan', [PositionController::class, 'index'])
            ->name('jabatan');
        Route::get('jabatan/data', [PositionController::class, 'data'])
            ->name('jabatan.data');
        Route::post('jabatan/store', [PositionController::class, 'store'])
            ->name('jabatan.store');
        Route::post('jabatan/destroy', [PositionController::class, 'destroy'])
            ->name('jabatan.destroy');
        Route::get('jabtan/getDataById', [PositionController::class, 'getDataById'])
            ->name('jabatan.getDataById');
        Route::post('jabatan/update', [PositionController::class, 'update'])
            ->name('jabatan.update');
        Route::get('jabatan/listDapertemen', [PositionController::class, 'listDapertemen'])
        ->name('jabatan.listDapertemen');



        // permission
        Route::get('permissions', [PermissionController::class, 'index'])
            ->name('permissions');
        Route::get('permission/data', [PermissionController::class, 'data'])
            ->name('permissions.data');
        Route::post('permission/store', [PermissionController::class, 'store'])
            ->name('permission.store');
        Route::post('permission/destroy', [PermissionController::class, 'destroy'])
            ->name('permission.destroy');
        Route::get('permission/getDataById', [PermissionController::class, 'getDataById'])
            ->name('permission.getDataById');
        Route::post('permission/update', [PermissionController::class, 'update'])
            ->name('permission.update');

        // role
        Route::get('role', [RoleController::class, 'index'])
            ->name('role');
        Route::get('role/data', [RoleController::class, 'data'])
            ->name('role.data');
        Route::get('role/listPermission', [RoleController::class, 'listPermission'])
            ->name('role.listPermission');
        Route::post('role/store', [RoleController::class, 'store'])
            ->name('role.store');
        Route::post('role/destroy', [RoleController::class, 'destroy'])
            ->name('role.destroy');
        Route::post('role/update', [RoleController::class, 'update'])
            ->name('role.update');
        Route::get('role/listPermissionByRole', [RoleController::class, 'listPermissionByRole'])
            ->name('role.listPermissionByRole');
        Route::get('role/dataById', [RoleController::class, 'getDataById'])
            ->name('role.getDataById');


        // user
        Route::get('users', [UserController::class, 'index'])
            ->name('users');
        Route::get('users/data', [UserController::class, 'data'])
            ->name('users.data');
        Route::get('users/listRole', [UserController::class, 'listRole'])
            ->name('users.list_role');
        Route::post('users/store', [UserController::class, 'store'])
            ->name('users.store');
        Route::post('users/destroy', [UserController::class, 'destroy'])
            ->name('users.destroy');

        // master modul
        Route::get('master-modul', [MasterModulController::class, 'index'])
            ->name('master-modul');
        Route::get('master-modul/data', [MasterModulController::class, 'data'])
            ->name('master-modul.data');
        Route::get('master-modul/store', [MasterModulController::class, 'store'])
            ->name('master-modul.store');
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
