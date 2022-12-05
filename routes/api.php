<?php

use App\Http\Controllers\UserAuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/sign-up', [UserAuthController::class, 'SignUp']);
Route::post('/sign-in', [UserAuthController::class, 'SignIn']);
Route::post('/sign-up-with-facebook', [UserAuthController::class, 'SignUpWithFacebook']);
Route::post('/sign-in-with-facebook', [UserAuthController::class, 'SignInWithFacebook']);
Route::post('/sign-up-with-google', [UserAuthController::class, 'SignUpWithGoggle']);
Route::post('/sign-in-with-google', [UserAuthController::class, 'SignInWithGoogle']);

