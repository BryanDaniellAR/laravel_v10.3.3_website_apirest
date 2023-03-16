<?php

use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\HostController;
use App\Http\Controllers\Api\UsabilityController;
use App\Http\Controllers\Api\UserHostController;
use App\Http\Controllers\Api\FileController;
use App\Http\Controllers\Api\AllController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::get('/', function () {
    return ["ApiRest","https://www.linkedin.com/in/bryan-daniell-arrivasplata-rojas-156508213/"];
});
Route::name('api.')->group(function(){
    Route::resource('roles',RoleController::class);
});
Route::name('api.')->group(function(){
    Route::resource('users',UserController::class);
});
Route::name('api.')->group(function(){
    Route::resource('profiles',ProfileController::class);
});
Route::name('api.')->group(function(){
    Route::resource('hosts',HostController::class);
});
Route::name('api.')->group(function(){
    Route::resource('usabilities',UsabilityController::class);
});
Route::name('api.')->group(function(){
    Route::resource('userhosts',UserHostController::class);
});
Route::name('api.')->group(function(){
    Route::resource('files',FileController::class);
});
Route::name('api.')->group(function(){
    Route::resource('alls',AllController::class);
});