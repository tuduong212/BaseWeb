<?php

use App\Http\Controllers\ViewController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Middleware\EnsureUserHasRole;
use App\Http\Middleware\TrimStrings;
use Illuminate\Support\Facades\Route;

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

// Tạo một middleware để kiểm tra xem có truyền token vào hay không 
// Route::get('/', function () {
//     return view('welcome');
// })->middleware(EnsureTokenIsValid::class);

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('token.is.valid');

// Có thể dùng withoutMiddleware để không áp dụng 1 đường dẫn chỉ định dùng middleware khi gom nhóm middleware 
// Nếu middleware đó khai báo global thì không sử dụng được withoutMiddleware

// Route::get('/', function () {
//     dd(request()->all());
//     return view('welcome');
// })->withoutMiddleware(TrimStrings::class);

Route::get('/',function (){
    dd(request()->all());
    return view('welcome');
})->middleware('rolexxx:editor,admin');


Route::get('/angular',[ViewController::class,'index']);