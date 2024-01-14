<?php

use App\Livewire\AllProducts;
use App\Livewire\Examples\Counter;
use App\Livewire\Examples\DropDown;
use App\Livewire\Examples\FileUpload;
use App\Livewire\Examples\Pagination;
use App\Livewire\Products\Products;
use App\Livewire\RegisterUser;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);
Route::get('/register', RegisterUser::class);
Route::get('/counties', DropDown::class);
Route::get('/fileUpload', FileUpload::class);
Route::get('/users', Pagination::class);
Route::get('/products', Products::class);
