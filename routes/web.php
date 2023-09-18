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
    // return view('welcome');
    // return view('Pages.Frontend.Portal.index');
    return redirect()->route('home');
});

Route::group(['namespace' => 'App\Http\Livewire'], function () {

    Route::group(['namespace' => 'Frontend'], function () {
        Route::group(['namespace' => 'Portal'], function () {
            Route::group(['namespace' => 'Home'], function () {
                Route::prefix('portal')->group(function () {
                    Route::get('/', Index::class)->name('portal.home');
                });
            });
        });
    });

    Route::group(['namespace' => 'Backend'], function () {
        Route::group(['namespace' => 'Admin'], function () {
            Route::group(['namespace' => 'Home'], function () {
                Route::prefix('admin')->group(function () {
                    Route::get('/', Index::class)->name('admin.home');
                });
            });
        });
    });
});
