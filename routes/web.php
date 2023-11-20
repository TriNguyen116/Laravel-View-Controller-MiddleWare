<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;





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

// Đăng kí Controller

//Client Route
// Route::get('/', function () {
//     return '<h1>Trang Chu Web</h1>';
// })->name('home');

// Route::get('/', function () {
//     $title = "Hoc Lap trinh laravel";
//     $content = "Hoc Lap trinh anh Hoang";
//     $dataView = [
//         'titleData' => $title,
//         'contentData' => $content
//     ];
//     return view('home', $dataView);
// })->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('categories')->group(function () {
    //Danh Sach chuyen muc
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');
    //Lay chi tiet danh muc(ap dung show form sua chuyen muc)
    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');
    //Xu ly update chuyen muc
    Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory']);
    //Hien thi form add du lieu
    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');
    //Xy ly them chuyen muc
    Route::post('/add', [CategoriesController::class, 'handleAddCategory']);
    //Xoa chuye muc
    Route::delete('/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('categories.delete');
});
// admin routes
// Route::prefix('admin')->group(function () {
//     Route::get('/', [Dashboard::class, 'index']);
//     Route::resource('products', ProductsController::class);
// });

Route::middleware('auth.admin')->prefix('admin')->group(function () {
    Route::get('/', [Dashboard::class, 'index']);
    Route::resource('products', ProductsController::class)->middleware('auth.admin.prodcut');
});


Route::get('san-pham/{id}', [HomeController::class, 'getProducts']);
