<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers;
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

Route::get('/', function () {
    $html = '<h1>Hoc lap trinh</h1>';
    return  $html;
});

// Route::get('example', function () {
//     return 'Phuong thuc get cua /example';
// });
// Route::get('example', function () {
//     return View('form');
//     //return 'Phuong thuc get cua /example';

// });

// Route::post('/example', function () {
//     return 'Phuong thuc post cua /example';
// });

// Route::put('/example', function () {
//     return 'Phuong thuc put cua /example';
// });

// Route::delete('/example', function () {
//     return 'Phuong thuc delete cua /example';
// });

// Route::patch('/example', function () {
//     return 'Phuong thuc patch cua /example';
// });

// Route::match(['get', 'post'], 'example', function () {
//     return $_SERVER['REQUEST_METHOD'];
// });

// Route::any('example', function (Request $request) {
//     return $request->method();
//     // return $_SERVER['REQUEST_METHOD'];
// });


// Route::get('show-form', function () {
//     return View('form');
//     //return 'Phuong thuc get cua /example';
// });

// Route::redirect('example', 'show-form', 301);
// Route::redirect('example', 'https://google.com');

//ho tro get, delete
// Route::view('show-form', 'form');
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/tin-tuc', 'HomeController@getNews')->name('news');
Route::get('/chuyen-muc/{id}', [HomeController::class, 'getCategory']);


Route::prefix('admin')->group(function () {
    Route::get('example/{slg?}-{id?}.htm', function ($slg = null, $id = null) {
        $content = 'Phuong thuc get cua example voi tham so: ';
        $content .= 'id = ' . $id . '<br/>';
        $content .= 'slg = ' . $slg . '<br/>';

        return $content;
    })->where(
        [
            'slg' => '.+',
            'id' => '[0-9]+'
        ]
    )->name('admin.example');

    Route::get('show-form', function () {
        return View('form');
    })->name('admin.show-form');

    Route::prefix('products')->middleware('CheckPermission')->group(function () {
        Route::get('/', function () {
            return 'danh sach san pham';
        });

        Route::get('add', function () {
            return 'them san pham';
        })->name('admin.products.add');

        Route::get('update', function () {
            return 'sua san pham';
        });

        Route::get('delete', function () {
            return 'xoa san pham';
        });
    });
});
