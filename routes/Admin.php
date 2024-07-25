<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DahboardController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\AdminController;
use Maatwebsite\Excel\Row;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::prefix('admin')->group(function () {

            Route::controller(AuthController::class)->group(function () {
                Route::get('/login', 'index_login')->middleware('guest');
                Route::post('/login', 'login');
                Route::get('/logout', 'logout');

                Route::get('/auth/redirect/{driver?}', 'redirect');
                Route::get('/auth/callback/{driver?}', 'callback');

                Route::get('/verificationcode', 'verificationcode');
                Route::any('/check_verificationcode', 'checkVertificationCode');
            });

            Route::prefix('dashboard')->middleware('CheckAuthAdmin')->controller(DahboardController::class)->group(function () {

                Route::get('/', 'dashboard');
                Route::get('/stores', 'stores');
                Route::get('transaction_subscrubtion', 'transaction_subscrubtion');

          
                Route::prefix('/role')->controller(RoleController::class)->group(function () {
                    Route::get('/', 'index');
                    Route::get('/permissions/{id_role}', 'permissions');
                    Route::post('/update_permission', 'update_permission');
                    Route::post('store', 'store');

                    Route::get('delete/{id}', 'delete');
                });

                Route::prefix('admins')->controller(AdminController::class)->group(function () {
                    Route::get('/', 'index');
                    Route::post('/store', 'store');
                    Route::get('/edit/{id}', 'edit');
                    Route::post('/update', 'update');
                    Route::get('/delete/{id}', 'delete');
                });
             
            });
        });
    }
);
