<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ListpostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SlideshowController;

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

Route::get('edit/{id}', [ProductController::class, 'editForm']);
Route::post('edit/{id}', [ProductController::class, 'saveEdit']);

Route::get('role/edit/{id}', [RoleController::class, 'editForm']);
Route::post('role/edit/{id}', [RoleController::class, 'saveEdit']);

Route::get('listpost/edit/{id}', [ListpostController::class, 'editForm']);
Route::post('listpost/edit/{id}', [ListpostController::class, 'saveEdit']);

Route::get('slideshow/edit/{id}', [SlideshowController::class, 'editForm']);
Route::post('slideshow/edit/{id}', [SlideshowController::class, 'saveEdit']);

Route::get('user/edit/{id}', [ClientController::class, 'editForm']);
Route::post('user/edit/{id}', [ClientController::class, 'saveEdit']);

Route::get('category/edit/{id}', [CategoryController::class, 'editForm']);
Route::post('category/edit/{id}', [CategoryController::class, 'saveEdit']);

Route::get('posts/edit/{id}', [PostsController::class, 'editForm']);
Route::post('posts/edit/{id}', [PostsController::class, 'saveEdit']);

Route::get('cart/edit/{id}', [AdminController::class, 'editForm']);
Route::post('cart/edit/{id}', [AdminController::class, 'saveEdit']);

Route::post('slideshow/add/image/{id}', [SlideshowController::class, 'updateImage']);

Route::post('user/add/image/{id}', [ClientController::class, 'profileUpdateImage']);
// api routes product
Route::post('product/add/image/{id}', [ProductController::class, 'profileUpdateImage']);

Route::post('posts/add/image/{id}', [PostsController::class, 'profileUpdateImage']);

Route::middleware('auth:sanctum')->get('/product', function (Request $request) {
    return $request->product();
});
