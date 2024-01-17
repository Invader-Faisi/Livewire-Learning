<?php


use App\Livewire\Calculator\Calculator;
use App\Livewire\Examples\Counter;
use App\Livewire\Examples\DropDown;
use App\Livewire\Examples\FileUpload;
use App\Livewire\Examples\Pagination;
use App\Livewire\Examples\Polling;
use App\Livewire\Products\Products;
use App\Livewire\RegisterUser;
use App\Livewire\Post\Posts;
use App\Livewire\Posts\CreatePost;
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
Route::get('/polling', Polling::class);
Route::get('/calculator', Calculator::class);
Route::get('/posts', Posts::class);
Route::get('/create-post', CreatePost::class);
