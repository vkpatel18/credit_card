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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('admin.logout');

Route::group([ 'middleware' => ['isSuperAdmin', 'auth']], function () {
    Route::get('/sgdsjd_aduasdhs_dhsaukhsf', [App\Http\Controllers\SuperAdminController::class, 'index'])->name('superadmin.index');
    Route::get('/sdshjdg_sdgsy', [App\Http\Controllers\SuperAdminController::class, 'dashboard'])->name('superadmin.dashboards');
    Route::get('/xkcncc_wewesd', [App\Http\Controllers\SuperAdminController::class, 'superadminList'])->name('superadmin.adminList');
    Route::get('/jsdjbdvdfvdf', [App\Http\Controllers\SuperAdminController::class, 'addAdmin'])->name('superadmin.addAdmin');
    Route::post('/vncvncvcxc', [App\Http\Controllers\SuperAdminController::class, 'storeAdmin'])->name('superadmin.storeAdmin');
    Route::get('/nbfbergefg/{id}', [App\Http\Controllers\SuperAdminController::class, 'editAdmin'])->name('superadmin.editAdmin');
    Route::post('/rtetrytytye', [App\Http\Controllers\SuperAdminController::class, 'updateAdmin'])->name('superadmin.updateAdmin');
    Route::get('/xzxcxzxzxwq/{id}', [App\Http\Controllers\SuperAdminController::class, 'deleteAdmin'])->name('superadmin.deleteAdmin');
    Route::get('/jjcbfffgfgs/{id}', [App\Http\Controllers\SuperAdminController::class, 'lockAdmin'])->name('superadmin.lockAdmin');
});

Route::group([ 'middleware' => ['isAdmin', 'auth']], function () {
    Route::get('/svdsgdsud', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::get('sdmsufhsdf', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboards');
    Route::get('avd_sgd_adguasd', [App\Http\Controllers\AdminController::class, 'credit_store_page'])->name('admin.credit_store_pages');
    Route::get('dshf_sdhs_adhhf', [App\Http\Controllers\AdminController::class, 'view_Credit_card_list'])->name('admin.view_Credit_card_list');
});
