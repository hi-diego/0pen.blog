<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::domain('{account}.0pen.blog')->group(function () {
//     Route::get('/', function ($account) {
//         return $account;
//     });
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
