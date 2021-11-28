<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Wink\Http\Controllers\ForgotPasswordController;
use Wink\Http\Controllers\LoginController;
use Wink\Http\Middleware\Authenticate;

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

// $middlewareGroup = config('wink.middleware_group');

// // Route::domain('{account}.0pen.blog')->group(function ($router) {
//     $middlewareGroup = config('wink.middleware_group');
//     Route::middleware($middlewareGroup)
//         ->as('wink.')
//         // ->domain(config('wink.domain'))
//         ->domain('{account}.0pen.blog')
//         ->prefix(config('wink.path'))
//         ->group(function () {
//             Route::get('/login', function ($account) {
//                 // dd($account);
//                 return $account;
//             });
//             // Route::get('/login', [LoginController::class, 'showLoginForm'])->name('auth.login');
//             Route::post('/login', [LoginController::class, 'login'])->name('auth.attempt');

//             Route::get('/password/forgot', [ForgotPasswordController::class, 'showResetRequestForm'])->name('password.forgot');
//             Route::post('/password/forgot', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
//             Route::get('/password/reset/{token}', [ForgotPasswordController::class, 'showNewPassword'])->name('password.reset');
//         });

//     Route::middleware([$middlewareGroup, Authenticate::class])
//         ->as('wink.')
//         ->domain(config('wink.domain'))
//         ->prefix(config('wink.path'))
//         ->group(function () {
//             // $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
//         });
// // });

Route::get('/', function () {
    return view('welcome');
});
